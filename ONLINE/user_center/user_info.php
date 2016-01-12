<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息</title>
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
.info{
  width:100%;
  font-family:'微软雅黑';
} 
#form1 input[type="text"]{
 margin-left:40px;
 font-family: '微软雅黑';
 color: #575757;
 font-size: 18px;
 background: #FFFFFF;
 width: 60%;
 position: relative;
 -webkit-appearance: none;
}
#self_description{
  margin-left:40px;
  font-family: '微软雅黑';
  color: #575757;
  font-size: 18px;
  background: #FFFFFF;
  width: 70%;
  position: relative;
  -webkit-appearance: none;
}
#form1 input[type="submit"]{
 font-family: '微软雅黑';
 color: #575757;
 font-size: 20px;
 background: #FFFFFF;
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
.info{
  width:100%;
  font-family:'微软雅黑';
}
#form1 input[type="text"]{
 margin-left:40px;
 font-family: '微软雅黑';
 color: #575757;
 font-size: 16px;
 background: #FFFFFF;
 width: 65%;
 position: relative;
 -webkit-appearance: none;
}
#self_description{
  margin-left:40px;
  font-family: '微软雅黑';
  color: #575757;
  font-size: 16px;
  background: #FFFFFF;
  width: 90%;
  position: relative;
  -webkit-appearance: none;
}
#form1 input[type="submit"]{
 font-family: '微软雅黑';
 color: #575757;
 font-size: 19px;
 background: #FFFFFF;
}
}
@media (max-width: 937px){
#form1 p{
  font-family: "微软雅黑";
  font-size: 16px;
  margin-left: 16px;
}
#form1 {
  padding-top: 70px;
  margin: 0px;
  padding-left: 18%;
}i
.info{
  width:600px;
  font-family:'微软雅黑';
} 
#form1 input[type="text"]{
 margin-left:30px;
 font-family: '微软雅黑';
 color: #575757;
 font-size: 16px;
 background: #FFFFFF;
 width: 70%;
 position: relative;
 -webkit-appearance: none;
}
#self_description{
  margin-left:30px;
  font-family: '微软雅黑';
  color: #575757;
  font-size: 16px;
  background: #FFFFFF;
  width: 90%;
  position: relative;
  -webkit-appearance: none;
}
#form1 input[type="submit"]{
 font-family: '微软雅黑';
 color: #575757;
 font-size:18px;
 background: #FFFFFF;
}
}
</style>
</head>
<body>
<?php 
require_once('../register/db_fns.php');
session_start();
$teacher_id = $_SESSION['userid'];
$conn = db_connect();
$conn->query("set names utf8");
$result=$conn->query("select m_teacher,m_description from t_teacher
                  	where m_teacherid = '".$teacher_id."'");

$row = $result->fetch_row();
$real_name = $row[0];
$description = $row[1];
?>
<div class="info">
<form method="post" action="./info_modify.php" id="form1" name="form1">
	<table>
		<tr>
			<td width="34%"><p>您的真实姓名:</p></td>
			<td width="66%">
			<input type="text" style="font-family:'微软雅黑';"  value="<?php echo $real_name;?>" name="realname"/></td>
		</tr>
		<tr>
			<td width="34%"><p>您的个人描述:</p></td>
			<td width="66%">
				<textarea id="self_description" style="height:300px;"  name="self_description"/><?php echo $description;?></textarea></td>
		</tr>
		<tr>
			<td colspan='2' style="text-align:center">
				<input type="submit" value="保存" style="margin-top:20px;"/></td></tr>
	</table>
</form>
</div>
</body>
</html>


