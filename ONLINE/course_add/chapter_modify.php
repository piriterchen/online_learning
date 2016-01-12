<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
@media (min-width: 1700px){
table{
width: 90%;
}
h1 {
	margin-top: 100px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 30px;
}
#delete {
	font-family: "微软雅黑";
	font-size: 20px;
	margin:25px;
}
#page {
  padding-top:50px;
    margin-left:40%;
	font-family: "微软雅黑";
	font-size: 18px;
}
#addcourse {
  padding-top:50px;
	padding-right:50px;
	font-family: "微软雅黑";
	font-size: 18px;
}
#upload{
  font-size:18px;
  text-align:center;
color:#008B8B;
}
#viewcourse{
  padding-left:25%;
  font-size:18px;
}
#page a{
	color:#8C8C8C;
	text-decoration:none;
}
#page a:hover,a:active{
	color:#9BCD9B;
}
#chapter {
	background-color: #F7F7F7;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-right-style: none;
	border-left-style: none;
	border-top-color: #6D6D6D;
	border-right-color: #6D6D6D;
	border-bottom-color: #6D6D6D;
	border-left-color: #6D6D6D;
	height:150px;
}
#chapter p{
	padding-top:20px;
	font-size:20px;
	padding-left:50px;
}
}

@media (max-width: 1699px){
table{
width: 80%;
}
h1 {
	margin-top: 70px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 28px;
}
#delete {
	font-family: "微软雅黑";
	font-size: 16px;
	margin:20px;
}
#page {
  padding-top:10px;
	margin-left:20%;
	font-family: "微软雅黑";
	font-size: 16px;
}
#upload{
 font-size:16px;
 text-align:center;
color:#008B8B;
}
#addcourse {
  padding-top:40px;
	padding-right:40px;
	font-family: "微软雅黑";
	font-size: 18px;
}
#viewcourse{
  padding-left:20%;
  font-size:16px;
}
#page a{
	color:#8C8C8C;
	text-decoration:none;
}
#page a:hover,a:active{
	color:#9BCD9B;
}
#chapter {
	background-color: #F7F7F7;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-right-style: none;
	border-left-style: none;
	border-top-color: #6D6D6D;
	border-right-color: #6D6D6D;
	border-bottom-color: #6D6D6D;
	border-left-color: #6D6D6D;
    height:80px;
}
#chapter p{
    font-family:'微软雅黑';
	padding-top:18px;
	font-size:18px;
	padding-left:40px;
}
}
@media (max-width: 700px){
table{
  width: 80%;
}
h1 {
	margin-top: 60px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 20px;
}
#delete {
	font-family: "微软雅黑";
	font-size: 14px;
	margin:20px;
}
#upload{
 font-size:14px;
 text-align:center;
color:#008B8B;
}
#page {
  padding-top:5px;
	margin-left:20%;
	font-family: "微软雅黑";
	font-size: 14px;
}
#addcourse {
  padding-top:32px;
	padding-right:32px;
	font-family: "微软雅黑";
	font-size: 16px;
}
#viewcourse{
   padding-left:20%;
   font-size:16px;
}
#page a{
	color:#8C8C8C;
	text-decoration:none;
}
#page a:hover,a:active{
	color:#9BCD9B;
}
#chapter {
	background-color: #F7F7F7;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-right-style: none;
	border-left-style: none;
	border-top-color: #6D6D6D;
	border-right-color: #6D6D6D;
	border-bottom-color: #6D6D6D;
	border-left-color: #6D6D6D;
	height:70px;
}
#chapter p{
    font-family:'微软雅黑';
	padding-top:18px;
	font-size:14px;
	padding-left:32px;
}
}

</style>
</head>

<body>
<script>
	function confirm_delete(form){
		if(!confirm('确认删除此章节？')){
			return false;
		}
		else{
			return true;
		}
	}
</script>
<h1>章节内容</h1>
<hr />
<table  border="0" align="center" >
	<?php
    include_once("./course_chapter.php");
    $line=0;
	if($num=count($myrow_chapter[0])){
		for($i=0;$i<$num;$i++){
            $chapter_index=$myrow_chapter[5][$i];
            $line=$i;
	?>
	<tr style="background:#F7F7F7;">
    <td width="75%" id="chapter">
    	<p><?php echo "第".$chapter_index."节";?> <span style="width:100px;">&nbsp;</span> <?php echo $myrow_chapter[0][$i];?></p>
    </td>
    <td width="25%"  id="chapter">
    	<form name="form1" method="POST" action="" onsubmit="return confirm_delete(form1)">
    	  <input name="<?php echo "delete".$chapter_index;?>" id="delete" type="submit"  value="删除">
    	</form>
     </td>
    </tr>
	<?php
        }      
		for($i=0;$i< $num;$i++){
			$chapter_index=$myrow_chapter[5][$i];
			$deleteid="delete".$chapter_index;
			if($_POST[$deleteid]=="删除"){
				echo "<script> alert('删除成功！');</script>";
				$sql_delete="delete from ".tb_table_chapter." where m_chapterindex=$chapter_index";
				$rs=$conn->query($sql_delete);
				if($rs){
					$sql_number=$conn->query("select * from ".tb_table_chapter." where m_courseid=$courseid");
					if($sql_number){
						$number=mysqli_num_rows($sql_number);
						if($number){
							for($j=$chapter_index+1;$j<=$number+1;$j++){
								$sql_update="update ".tb_table_chapter." set m_chapterindex=$j-1 where m_chapterindex=$j";
								$conn->query($sql_update);
							}
						}
					}
				}
				echo "<script> window.location.href='./chapter_modify.php?courseid=$courseid';</script>";
			}
        }
?>
 
</table>
<table id="page">
  <tr>
    <td width="80%" id="page" style="color:#5F9EA0;">
        <?php echo $chapterpage->ShowPageChapter("章节","个","","a2",$courseid);?>
    </td>
  </tr>
</table>
<?php
	}
?>
<table style="margin-left:5%;width:90%;" id="upload">
<h1>功能区</h1>
<hr/>
<tr><td>&nbsp</td></tr>
<tr style="background:#FFFFE0"> 
      <form name="form2" method="POST" action="<?php echo "./add_chapter.php?courseid=$courseid";?>" enctype="multipart/form-data">
      <td width="40%" height="50" style="font-family:'微软雅黑';"><p id="upload">点击右侧按钮增加课程</p></td>
      <td width="20%" height="50">
      		<input name="add" id="add" type="submit" style="font-family:'微软雅黑'" value="增加章节">
      </td>
      </form>
</tr>
<tr style="background:#FFFFE0">
      <form  method="POST" action="../download/browsedir.php?courseid=<?php echo $courseid; ?>" enctype="multipart/form-data">
      <td width="40%" height="50" style="font-family:'微软雅黑';"><p id="upload">点击右侧按钮查看该课程上传文件</p></td>
      <td width="20%" height="50">
      		<input name="lookup" type="submit" style="font-family:'微软雅黑'" value="查看文件">
      </td>
      </form>     
    </tr>
<tr style="background:#FFFFE0"> 
      <form name="form_up" method="POST" action="" enctype="multipart/form-data">
      <td width="20%" height="50" style="font-family:'微软雅黑';"><p id="upload">课件及习题上传:</p></td>
      <td width="40%" height="50">
        <input style="font-family:'微软雅黑';" type="file" name="crs_up" id="crs_up"> 
       <input style="font-family:'微软雅黑';" type="submit" name="Submit" value="提交">
     </td>        
    </form>
    </tr>
</table>
<?php
    if($_POST['Submit']=="提交")
    {
     if(!empty($_FILES['crs_up']['name'])){
       $fileinfo = $_FILES['crs_up'];
       if($fileinfo['size']<1000000000&&$fileinfo['size']>0){
           $temp_name = $_FILES['crs_up']['name'];
         $upfile = '../download_dir/'.$courseid.'/'.$temp_name;
         if(is_uploaded_file($_FILES['crs_up']['tmp_name'])){
           if(!move_uploaded_file($_FILES['crs_up']['tmp_name'],$upfile)){
            echo 'Problem:Could not move file to destination directory';
            exit;
           }
         }
         else{
             echo 'Problem:Possible file upload attack. Filename:';
             echo $temp_name;
             exit;
         }
       echo "<script> alert('上传文件成功');</script>";
       }
       else{
         echo "<script> alert('上传文件太大');</script>";
       }
     }
     else{
      echo "<script> alert('上传文件不能为空');</script>";
     }
    }
?>
<?php
    include_once('../forum_course/db_fns.php');
        $conn = db_connect();
    if($_POST['post_note']=="提交"){
        $conn->query("set names utf8");
        $query = "update t_course set m_note = '".$_POST['message']."' where m_courseid = '".$courseid."'";
        $result = $conn->query($query);
        if(!$result){
        return false;
        }
    }
        $conn->query("set names utf8");
        $query_note="select m_note from t_course where m_courseid = '".$courseid."'";
        $result = $conn->query($query_note);
        if(!$result){
         return false;
        }
        if($result->num_rows>0){
          $this_row = $result->fetch_array();
          $NOTE_COURSE = $this_row[0];
        }
    
?>
<table style="margin-left:5%;width:90%;" id="upload">
  <form action="" method="post" name="form1">
  <tr style="background:#FFFFE0">
  <td width="40%" height="50" style="font-family:'微软雅黑';"><p id="upload">请输入该课程公告信息</p></td>
    <td>
    <textarea name="message" style="width:90%;height:80px;font-family:'微软雅黑';" ><?php echo $NOTE_COURSE;?></textarea>
    </td>
  <td width="10%">
   <input type="submit" style="height:100%;height:25px;font-famiily:'微软雅黑'" name="post_note" value="提交" />
  </td>
 </tr>
</form>
</table>
<p>&nbsp;</p>
</body>
</html>
