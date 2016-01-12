<?php
require("./search/RMM_2.php");

function usingRMM($keyword){
	$yuan=trim($keyword);
	$yuan=iconv('UTF-8','GB2312',$yuan);
	$tt=$yuan;
	$str=gl($tt);
	$sp=new SplitWord();
	$tt=$sp->SplitRMM($str);
	$cc=$tt;
	if(substr($cc,0,3)=="、"){
		$cc=substr($cc,3);
	}
	if(substr($cc,-3,3)=="、"){
		$cc=substr($cc,0,-3);
	}
	$newstr=explode("、",$cc);
	if($newstr[0]=="") return false;
	for($i=0;$i<count($newstr);$i++){
		$newstr[$i]=iconv("gb2312","UTF-8",$newstr[$i]);
	}
	return $newstr;
}

			

?>
