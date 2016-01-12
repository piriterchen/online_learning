<html>
<head>
  <title>Downloading</title>
</head>
<body>
<?php
//  $file_name=$_POST["download_file"];
//  echo $file_name;
  $file_path=$_GET["file"];
  $file_name=basename($file_path);
//  $file_sub_path="/home/upload_file/";
//  $file_path=$file_sub_path.$file_name;
  if(!file_exists($file_path)){
	echo "file does not exist!";
	return;
  }
//  iconv('utf-8','gb2312',$file_path);
  $fp=fopen($file_path,"r");
  $file_size=filesize($file_path);
  Header("Content-type:application/octet-stream");
  Header("Accept-Ranges:bytes");
  Header("Accept-Length:".$file_size);
  Header("Content-Disposition:attachment;filename=".$file_name);
//  header("Content-Encoding:none");
//  header("Content-Transfer-Encoding:binary");
//  $buffer=1024;
//  $file_count=0;
//  while(!feof($fp)&&$file_count<$file_size){
//	$file_con=fread($fp,$buffer);
//	$file_count+=$buffer;
//	echo $file_con;
//  }
//  ob_clean();
//  flush();
//    echo fread($fp,$file_sizie);
      ob_clean();
      flush();
  readfile($file_path);
  fclose($fp);
  exit();
?>
<\body>
<\html>
