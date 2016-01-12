<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
	@media (min-width: 1700px){
.my_course img{
	height:60%;
	width:80%;
}
h1 {
	margin-top: 100px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 30px;
}
#page{
	background-color: #FFFFFF;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-bottom-style: solid;
	border-top-color: #6D6D6D;
	height:100px;
}
#seppage{
	padding-top:50px;
	padding-right:50px;
	font-family: "微软雅黑";
	font-size: 20px;
}
#seppage a{
	color:#8C8C8C;
	text-decoration:none;
}
#seppage a:hover,a:active{
	color:#9BCD9B;
}

#page p{
	font-family: "微软雅黑";
	font-size: 20px;
	padding-left:50px;
}
#page img{
	padding:20px;
}
}
	@media (max-width: 1699px){
.my_course img{
	height:60%;
	width:80%;
}
h1 {
	margin-top: 70px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 24px;
}
#page{
	background-color: #FFFFFF;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-bottom-style: solid;
	border-top-color: #6D6D6D;
	height:100px;
}
#seppage{
	padding-top:40px;
	padding-right:40px;
	font-family: "微软雅黑";
	font-size: 18px;
}
#seppage a{
	color:#8C8C8C;
	text-decoration:none;
}
#seppage a:hover,a:active{
	color:#9BCD9B;
}
#page p{
  font-family: "微软雅黑";
 font-size: 18px;
 padding-left:40px;
 }          
 #page img{
   padding:18px;
       }
}
	@media (max-width: 700px){
.my_course img{
	height:60%;
	width:80%;
}
h1 {
	margin-top: 60px;
	padding-left:10%;
	font-family: "微软雅黑";
	font-size: 20px;
}
#page{
	background-color: #FFFFFF;
	border-top-style: 1px solid rgb(150, 150, 150);
	border-bottom-style: solid;
	border-top-color: #6D6D6D;
	height:100px;
}
#seppage{
	padding-top:32px;
	padding-right:32px;
	font-family: "微软雅黑";
	font-size: 14px;
}
#seppage a{
	color:#8C8C8C;
	text-decoration:none;
}
#seppage a:hover,a:active{
	color:#9BCD9B;
}

#page p{
	font-family: "微软雅黑";
	font-size: 14px;
	padding-left:32px;
}
#page img{
	padding:16px;
}
}
</style>
</head>

<body>
<h1>我的课程</h1>
<hr />
<table width="90%" border="0" align="center" class="my_course">
	<?php
	include_once("./user_course.php");
	if($num=count($myrow_course[0])){
		for($i=0;$i<$num;$i++){
			$course_id=$myrow_course[6][$i];
	?>
	<tr>
    <td width="25%" height="150" id="page">
    	<img src="<?php echo "../".$myrow_course[3][$i];?>" />
    </td>
    <td width="75%" height="150" bgcolor="#F9F9F9" id="page"
						style="cursor:pointer" onclick="window.location.href='<?php echo "chapter_modify.php?courseid=$course_id";?>';" onmouseover="this.style.backgroundColor='#B0E0E6'" onmouseout="this.style.backgroundColor=''">
    	<p><?php echo $myrow_course[0][$i];?></p>
    	<p><?php echo "类型：".$myrow_course[1][$i]."&nbsp;&nbsp;&nbsp;".
        "关注人数：".$myrow_course[4][$i];?></p>
    </td>
  </tr>
	<?php
		}
	?>
</table>
<table align="right" >
  <tr>
    <td id="seppage">
    	<?php echo $coursepage->ShowPageCourse("课程","种","","a1");?>
    </td>
  </tr>
</table>
  <?php
	}
	?>

<p>&nbsp;</p>
</body>
</html>
