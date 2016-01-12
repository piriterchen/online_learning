<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
@media (min-width: 1700px){
#form1 p{
	font-family: "微软雅黑";
	font-size: 20px;
	margin-left: 20px;
}

#form1 {
	padding-top: 100px;
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
	font-size: 18px;
	background: #FFFFFF;
	width: 60%;
	position: relative;
	-webkit-appearance: none;
}
#content{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 18px;
	background: #FFFFFF;
	width: 65%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="file"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 18px;
	background: #FFFFFF;
	width: 60%;
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
#content{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 70%;
	position: relative;
	-webkit-appearance: none;
}
#form1 input[type="file"]{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 60%;
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
.course{
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
	width: 70%;
	position: relative;
	-webkit-appearance: none;
}
#content{
	font-family: '微软雅黑';
	color: #575757;
	font-size: 16px;
	background: #FFFFFF;
	width: 75%;
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
	font-size: 16px;
	padding: 12px 20px;
	border: none;
	cursor: pointer;
	width: 100px;
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
</style>
</head>

<body>
<script language="javascript">
	function checkcourse(form){
		console.log("wagege");
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
		if(form.content.value==""){
			alert("请输入课程描述");
			form.content.focus();
			return false;
		}
	}
</script>
<div class="course" width="100%">
<form action="add_course.php" method="post" enctype="multipart/form-data" name="form1" id="form1" height="500">
  <table  border="0" align="center">
    <tr>
      <td width="34%" height="70"><p> 课程名称：</p></td>
      <td width="66%" height="70">
        <input name="cname" type="text" id="cname" value="请输入课程名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入课程名';}"/>
      </td>
    </tr>
    <tr>
      <td height="70"><p>课程类型：</p></td>
      <td height="70">
        <input name="ctype" type="text" id="ctype" value="请输入课程类型" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入课程类型';}" />
  		</td>
    </tr>
    <tr>
      <td height="130" valign="middle"><p>课程描述：</p></td>
      <td height="130" valign="bottom">
        <textarea name="content" id="content"  cols="60" rows="8" ></textarea>
      </td>
    </tr>
    <tr>
      <td height="70"><p>课程图片上传：</p></td>
      <td height="70">
        <input type="file" name="image" id="image"/>
      </td>
    </tr>
    <tr>
      <td height="70"><p>&nbsp;</p></td>
      <td height="70" style="margin-left:10%;">
      	<input type="submit" name="Submit" value="提交" onClick="return checkcourse(form)"/></td>
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
	if($_POST['Submit']=="提交")
	{
	if(!empty($_FILES['image']['name'])){
		$fileinfo=$_FILES['image'];
		if($fileinfo['size']<10000000&&$fileinfo['size']>0){
			$temp_name=$_FILES['image']['name'];
			$houzhui_array=explode(".",$temp_name);
			$houzhui=$houzhui_array[count($houzhui_array)-1];
			$upfile = './upload_dir/course_image/'.$file_name.".".$houzhui;
			move_uploaded_file($_FILES['image']['tmp_name'], '../'.$upfile);
?>
<script language="javascript">
	alert("课程增加成功");
	form.submit();
</script>
<?php
	$coursename=$_POST['cname'];
	$coursetype=$_POST['ctype'];
	$coursecontent=$_POST['content'];
	$numconcern=0;
	$image=$upfile;
	$rs=$conn->query("select m_teacher from ".tb_table_teacher." where m_teacherid=$teacherid");
	if($rs){
			$row=mysqli_fetch_array($rs);
			$teachername=$row['m_teacher'];
	}
	$date=date('Y-m-d H:i:s');
	if($coursename&&$coursetype&&$coursecontent){
		$sql="insert into ".tb_table_course."(m_course,m_type,m_content,m_teacher,m_time,
		m_image,m_numconcern)values('$coursename','$coursetype','$coursecontent','$teachername',
		'$date','$image','$numconcern')";
		$result=$conn->query($sql);
		if($result){
			$rs=$conn->query("select m_courseid from ".tb_table_course." where m_teacher like '$teachername%' order by m_courseid asc");
			if($rs){
				$num=mysqli_num_rows($rs);
				while($rowc=mysqli_fetch_array($rs)){
					$courseid[]=$rowc['m_courseid'];
				}
				$newcourseid=$courseid[$num-1];
				$sql_tea="insert into ".tb_table_teacourse."(m_teacherid,m_courseid)values('$teacherid','$newcourseid')";
				$conn->query($sql_tea);
			}
		}
	}
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
	alert("请选择上传的课程图片");
</script>
<?php
	}
	}

?>
</body>
</html>
