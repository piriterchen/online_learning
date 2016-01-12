<html>
<head>
  <title>Browse Directories</title>
  <meta charset="utf-8">
  <link href="./style/style_file.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
  include_once('db_fns.php');
  $file_get = $_GET['courseid'];
  $conn = db_connect();
  $conn->query("set names utf8");
  $query = "select m_course from t_course where m_courseid= '".$file_get."'";
  $result = $conn->query($query);
  if(!$result){
    return false;
  }
  if($result->num_rows>0){
    $this_row = $result->fetch_array();
 //   echo $this_row[0];
  }
  $file_sub_path = "../download_dir/";
  //  $file_dir = "/home/upload_file";
  $file_dir = $file_sub_path.$file_get."/";
  $dir = dir($file_dir);

//  echo "<p>Handle is $dir->handle</p>";
//  echo "<p>Upload directory is $dir->path</p>";
  //  echo '<p>Directory Listing:</p><ul>';
  function format_size($size){
    $prec = 3;
    $size = round(abs($size));
    $units = array(0=>"B",1=>"KB",2=>"MB",3=>"GB",4=>"TB");
    if($size == 0)
        return str_repeat(" ",$prec)."0$units[0]";
    $unit = min(4,floor(log($size)/log(2)/10));
    $size = $size*pow(2,-10*$unit);
    $digi = $prec-1-floor(log($size)/log(10));
    $size = round($size*pow(10,$digi))*pow(10,-$digi);
    return $size.$units[$unit];
  
  }
?>
<div class="upfile" > 
<table align="center"> 
<tr><td colspan="3" id="title"><?php echo $this_row[0]; ?></td></tr>
<tr><td colspan="3" id="desc">描述:课件及习题下载 </td></tr>
<tr>
   <td id="info">文件名</td>
   <td id="info">大小</td>
   <td id="info">修改时间</td>
   <td id="info">下载</td>
</tr>
<?php  
  while(false !== ($file = $dir->read()))
    //strip out the two entries of . and ..
  	if($file != "." && $file != "..")
    {
        $file_path = $file_dir.$file;
        $size_f = filesize($file_path);
        $size_f = format_size($size_f);
        $fileDate = filemtime($file_path);
//        echo $fileDate;
        if($fileDate){
            $fileDate = date("Y-m-d",$fileDate);
//            echo $fileDate;
        }
?>
   <tr>
   <td id="main"><?php echo $file;?></td>
   <td id="main"><?php echo $size_f;?></td>
   <td id="main"><?php echo $fileDate;?></td>  
   <td id="main"><?php echo '<a href="download.php?file='.$file_path.'"><img height="30px" weight="35px" src="images/download.jpg"></a>';?></td>
   </tr>
<?php
  	}
 // echo '</ul>';
  $dir->close();
?>
</table>
</div>
</body>
</html>
