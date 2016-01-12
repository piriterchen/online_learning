<?php
  $file_get=$_GET["courseid"];
  $file_sub_path="download_dir/";
  $file_path=$file_sub_path.$file_get.".zip";
  $file_name=$file_get.".zip";
  if(!file_exists($file_path)){
	echo "file does not exist!";
	return;
  }
  $fp=fopen($file_path,"r");
  $file_size=filesize($file_path);
  Header("Content-type:application/octet-stream");
  Header("Accept-Ranges:bytes");
  Header("Accept-Length:".$file_size);
  Header("Content-Disposition:attachment;filename=".$file_name);

  ob_clean();
  flush();
  readfile($file_path);
  fclose($fp);
  exit();
?>
