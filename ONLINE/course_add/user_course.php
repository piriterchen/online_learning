<?php
require("./conn/config.php");
//获取老师的ID号
session_start();
$teacherid=$_SESSION['userid'];
$DB= new ConnDB(dbtype,host,user,pwd,dbname);

$conn=$DB->GetConnId();
$courseid_array=array();
$courseid_sql="select m_courseid from ".tb_table_teacourse." where m_teacherid=$teacherid";
$rs=$conn->query($courseid_sql);
if($rs){
	while($row=mysqli_fetch_array($rs)){
		$courseid_array[]=$row['m_courseid'];
	}
}
$course_sql="select * from ".tb_table_course." where m_courseid=$courseid_array[0]";
for($i=1;$i<count($courseid_array);$i++){
	$course_sql.=" or m_courseid=$courseid_array[$i]";
}
$coursepage=new SepPage();
$myrow_course=$coursepage->ShowCourse($course_sql,$conn,pagesize,$_GET["pagec"]);
?>