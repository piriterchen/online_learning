<?php
class SplitWord{
	var $TagDic=Array();
	var $RankDic=Array();
	var $SourceStr="";
	var $ResultStr="";
	var $SplitChar=' ';//分隔符
	var $SplitLen=4;//保留词长度
	var $MaxLen=7;//词典最大中文字，7是数组的最大索引
	var $MinLen=3;//最小的中文字（2个字），3是数组的最大索引

	function __construct(){
		$dicfile=dirname(__FILE__)."/ppldic.csv";
		$fp=fopen($dicfile,'r');//读取字库中的词
		while($line=fgets($fp,256)){
			$ws=explode(' ',$line);
			$this->TagDic[$ws[0]]=$ws[1];//对词库中的词进行拆分
			$this->RankDic[strlen($ws[0])][$ws[0]]=$ws[1];
		}
		fclose($fp);
	}
	function SplitWord(){
		$this->__construct();//初始化对象
	}
	  //设置源字符串
  function SetSource($str){
    $this->SourceStr = $this->UpdateStr($str);
    $this->ResultStr = "";
  }
   
  //检查字符串是否不存在中文
  function NotGBK($str)
  {
    if($str=="") return "";
    if( ord($str[0])>0x80 ) return false;
    else return true;
  }
 
  //RMM分词算法
  function SplitRMM($str=""){
    if($str!="") $this->SetSource($str);
    if($this->SourceStr=="") return "";
    //$this->SourceStr = $this->UpdateStr($this->SourceStr);
    $spwords = explode(" ",$this->SourceStr);
    $spLen = count($spwords);
    $spc = $this->SplitChar;
    for($i=0;$i<$spLen;$i++){
        if($spwords[$i]=="") continue;
        if($this->NotGBK($spwords[$i])){
            if(preg_match("/[^0-9\.\+\-]/",$spwords[$i]))
            { $this->ResultStr .= $spc.$spwords[$i]; }
            else
            {
            	//有什么用？
                $nextword = "";
                @$nextword = substr($this->ResultStr,0,strpos($this->ResultStr,""));
            }
        }
        else
        {
          $c = $spwords[$i][0].$spwords[$i][1];
          $this->ResultStr .= $spc.$this->RunRMM($spwords[$i]);
        }
    }
    $this->ResultStr=str_replace($spc,"、",$this->ResultStr);
    return $this->ResultStr;
  }
  //对全中文字符串进行逆向匹配方式分解
  function RunRMM($str){
    $spc = $this->SplitChar;
    $spLen = strlen($str);
    $rsStr = "";
    $okWord = "";
    $tmpWord = "";
    $WordArray = Array();
    $Word_Array=array();
    //逆向字典匹配
    for($i=($spLen-1);$i>=0;){
        //当i达到最小可能词的时候
        if($i<=$this->MinLen){
            if($i==1){
               //echo "la".substr($str,0,2)."la";
            }
            else
            {
               $w = substr($str,0,$this->MinLen+1);
               if($this->IsWord($w)){
                $WordArray[] = $w;                                                                                  
               }else{
               	//echo "wa".substr($str,0,2)."wa";
               	//echo "qa".substr($str,2,2)."qa";
                   //$WordArray[] = substr($str,2,2);
                  // $WordArray[] = substr($str,0,2);
               }
          	}
            $i = -1; break;
        }
        //分析在最小词以上时的情况
        if($i>=$this->MaxLen) $maxPos = $this->MaxLen;
        else $maxPos = $i;
        $isMatch = false;
        for($j=$maxPos;$j>=0;$j=$j-2){
             $w = substr($str,$i-$j,$j+1);
             if($this->IsWord($w)){
                $WordArray[] = $w;
                $i = $i-$j-1;
                $isMatch = true;
                break;
             }      
        }
        if($isMatch==false){
        	$i=$i-2;
        	//array_push($WordArray,substr($str,$i+1,2));
        }
    }
    $rsStr = $this->otherword($WordArray);
    return $rsStr;
  }
   
	function otherword($WordArray){
    $wlen = count($WordArray)-1;                        //计算数组的元素个数
    $rsStr = "";                                        //初始化变量
    $spc = $this->SplitChar;
    for($i=$wlen;$i>=0;$i--)
    {
       $rsStr .= $WordArray[$i]."、";          //将数组为顿号进行拆分
    }
    if(substr($rsStr,0,3)=="、"){
			$rsStr=substr($rsStr,3);
		}
		if(substr($rsStr,-3,3)=="、"){
			$rsStr=substr($rsStr,0,-3);
		}
    return $rsStr;
  }
   
  //判断词典里是否存在某个词
  function IsWord($okWord){
    $slen = strlen($okWord);
    if($slen > $this->MaxLen) return false;
    else return isset($this->RankDic[$slen][$okWord]);
  }
   
  //整理字符串（对标点符号，中英文混排等初步处理）
  function UpdateStr($str){
    $spc = $this->SplitChar;
    $slen = strlen($str);
    if($slen==0) return '';
    $okstr = "";
    $prechar = 0; // 0-空白 1-英文 2-中文 3-符号
    for($i=0;$i<$slen;$i++){
      if(ord($str[$i]) < 0x81){
        //英文的空白符号
        if(ord($str[$i]) < 33){
          if($prechar!=0&&$str[$i]!="\r"&&$str[$i]!="\n") $okstr .= $spc;
          $prechar=0;
          continue; 
        }else if(preg_match("/[^0-9a-zA-Z@%#:&_\-\+]/",$str[$i])){
          if($prechar==0){  $okstr .= $str[$i]; $prechar=3;}
          else{ $okstr .= $spc.$str[$i]; $prechar=3;}
        }else{
            if($prechar==2||$prechar==3)
            { $okstr .= $spc.$str[$i]; $prechar=1;}
            else
            { 
              if(preg_match("/@#%:/",$str[$i])){ $okstr .= $str[$i]; $prechar=3; }
              else { $okstr .= $str[$i]; $prechar=1; }
            }
        }
      }
      else{
        //如果上一个字符为非中文和非空格，则加一个空格
        if($prechar!=0 && $prechar!=2) $okstr.= $spc;
        //如果中文字符
        if(isset($str[$i+1])){
          $c = $str[$i].$str[$i+1];       
          $n = hexdec(bin2hex($c));
          if($n< 0xA13F && $n > 0xAA40){
                if($prechar!=0) $okstr.= $spc.$c;
                else $okstr .= $c;
                $prechar = 3; 
            }
          else{
            $okstr.= $c;
            $prechar = 2;
          }
          $i++;
        }
      }
    }
    return $okstr;
  }
}
function gl($tt){
	$str=array("，","");    
  $tt=str_replace($str,'',$tt); 
  $str=array("。","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("！","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("!","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("：","");    
  $tt=str_replace($str,'',$tt);  
  $str=array(":","");    
  $tt=str_replace($str,'',$tt);  
  $str=array(";","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("；","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("、","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("*","");    
  $tt=str_replace($str,'',$tt);  
  $str=array(".","");    
  $tt=str_replace($str,'',$tt);  
  $str=array(",","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("'","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("“","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("”","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("‘","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("’","");    
  $tt=str_replace($str,'',$tt);    
  $str=array("？","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("?","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("\\","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("/","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("(","");    
  $tt=str_replace($str,'',$tt);  
  $str=array(")","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("（","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("）","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("——","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("-","");    
  $tt=str_replace($str,'',$tt);  
  $str=array("_","");    
  $tt=str_replace($str,'',$tt);  
  return $tt; 
}

function chinesesubstr($str,$start,$len) { 
	$strlen=$start+$len; 
	for($i=0;$i<$strlen;$i++) { 
  	if(ord(substr($str,$i,1))>0xa0){ 
   		$tmpstr.=substr($str,$i,2); 
    	$i++; 
  	} 
  	else 
    	$tmpstr.=substr($str,$i,1); 
	} 
	return $tmpstr; 
}
?>