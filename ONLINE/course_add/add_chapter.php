<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>增加课程</title>
<style type="text/css">
@media (min-width: 1700px){
#form1 p{
	font-family: "微软雅黑";
	font-size: 20px;
	margin-left: 20px;
}

#form1 {
	padding-top: 150px;
	margin: 0px;
	padding-left: 20%;
}

#form1 table {
	margin: 0px;
	padding: 0px;
}
#form1 input[type="text"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 18px;
	background: #FFFFFF;
	width: 50%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="file"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 18px;
	background: #FFFFFF;
	width: 50%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="submit"]{
	font-family: '微软雅黑';
	background: #3B3B3B;
	color: #ffffff;
	text-transform: uppercase;
	font-size: 15px;
	padding: 12px 20px;
	border: none;
	cursor: pointer;
	width: 100px;
	position: absolute;
	line-height: 1.5em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	-webkit-appearance: none;
}
#form1 input[type="submit"]:hover {
	background: #FF5454;
}
}
@media (max-width: 1699px){
#form1 p{
	font-family: "微软雅黑";
	font-size: 18px;
	margin-left: 120px;
}

#form1 {
	padding-top: 70px;

}

#form1 table {
	margin: 0px;
	padding: 0px;
}
#form1 input[type="text"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 65%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="file"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 65%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="submit"]{
	font-family: '微软雅黑';
	background: #3B3B3B;
	color: #ffffff;
	text-transform: uppercase;
	font-size: 15px;
	padding: 10px 17px;
	border: none;
	cursor: pointer;
	width: 70px;
	position: absolute;
	line-height: 1.4em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	-webkit-appearance: none;
}
#form1 input[type="submit"]:hover {
	background: #FF5454;
}
}
@media (max-width: 937px){
.chapter{
	width:600px;
}
#form1 p{
	font-family: "微软雅黑";
	font-size: 16px;
	margin-left: 16px;
}

#form1 {
	padding-top: 70px;
	margin: 0px;
	padding-left: 18%;
}

#form1 table {
	margin: 0px;
	padding: 0px;
}
#form1 input[type="text"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 65%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="file"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 65%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="submit"]{
	font-family: '微软雅黑';
	background: #3B3B3B;
	color: #ffffff;
	text-transform: uppercase;
	font-size: 15px;
	padding: 12px 20px;
	border: none;
	cursor: pointer;
	width: 100px;
	position: absolute;
	line-height: 1.5em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	-webkit-appearance: none;
}
#form1 input[type="submit"]:hover {
	background: #FF5454;
}
}
</style>
</head>

<body>
<script language="javascript">
	function checkcourse(form){
		if(form.cname.value==""){
			alert("请输入课程名");
			form.cname.focus();
			return false;
		}
		if(form.ctype.value==""){
			alert("请输入课程类型");
			form.ctype.focus();
			return false;
		}
	}
</script>
<div class="chapter" width="100%">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" height="684">
  <table border="0" align="center">
    <tr>
      <td width="34%" height="100"><p> 章节名称：</p></td>
      <td width="66%" height="100">
        <input name="cname" type="text" id="cname" size="30" value="请输入章节名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入章节名';}"/>
      </td>
    </tr>
    <tr>
      <td height="90"><p>章节ID：</p></td>
      <td height="90">
        <input name="ctype" type="text" id="ctype" size="30" value="请输入该章节为第几章" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入该章节为第几章';}"/>
  		</td>
    </tr>
    <tr>
      <td height="90"><p>章节视频上传：</p></td>
      <td height="90">
        <input type="file" name="image" id="image"/>
      </td>
    </tr>
    <tr>
      <td height="90"><p>&nbsp;</p></td>
      <td height="90" align="center">
      	<input type="submit" name="Submit" value="提交" onClick="return checkcourse(form1)"/></td>
    </tr>
  </table>
</form>
</div>
<?php
	session_start();
	$teacherid=$_SESSION['userid'];//获取teacherid
	require("./conn/config.php");
	$DB= new ConnDB(dbtype,host,user,pwd,dbname);
	$conn=$DB->GetConnId();
	$course_query="select * from ".tb_table_course;
	$rs=$conn->query($course_query);
	$count_course=mysqli_num_rows($rs)+1;
	$file_name=$teacherid."-".$count_course;
	if($_GET['courseid'])
		$course_id=$_GET['courseid'];
	if($_POST['Submit']=="提交")
	{
	if(!empty($_FILES['image']['name'])){
		$fileinfo=$_FILES['image'];
		echo $fileinfo['size'];
		if($fileinfo['size']<100000000&&$fileinfo['size']>0){
			$temp_name=$_FILES['image']['name'];
			$houzhui_array=explode(".",$temp_name);
			$houzhui=$houzhui_array[count($houzhui_array)-1];
			$upfile = './upload_dir/course_video/'.$file_name.".".$houzhui;
			move_uploaded_file($_FILES['image']['tmp_name'], '../'.$upfile);
			echo "<script> alert('章节增加成功');form.submit();</script>";
			$chaptername=$_POST['cname'];
			$chapterindex=$_POST['ctype'];
			$numconcern=0;
			$image=$upfile;
			$chaining=$upfile;
			if($chaptername&&$chapterindex){
				$sql_number=$conn->query("select * from ".tb_table_chapter." where m_courseid=$course_id");
				if($sql_number){
					$number=mysqli_num_rows($sql_number);
					if($number>=$chapterindex){	
						for($i=$number;$i>=$chapterindex;$i--){
							$sql_change="update ".tb_table_chapter." set m_chapterindex=$i+1 where m_chapterindex=$i";	
							$conn->query($sql_change);
						}
					}
				}
				$sql="insert into ".tb_table_chapter."(m_courseid, m_chapter, m_image,m_chaining,m_numconcern,m_chapterindex)values('$course_id','$chaptername','$image','$chaining','$numconcern','$chapterindex')";
				$result=$conn->query($sql);
			}
			echo "<script> window.location.href='./chapter_modify.php?courseid=$course_id';</script>";
		}
		else{
?>
<script language="javascript">
	alert("上传文件太大");
</script>
<?php
		}
	}
	else{
?>
<script language="javascript">
	alert("请选择上传的视频");
</script>
<?php
	}
	}

?>
</body>
</html>
