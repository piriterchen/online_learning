<?php
require("./conn/config.php");
define('pagesize',4);

/************mysql*************/

$DB= new ConnDB(dbtype,host,user,pwd,dbname);
$conn=$DB->GetConnId();
$admindb=new AdminDB();
$seppage=new SepPage();
$seppagep=new SepPage();
$unhtml=new UseFun();
$teacher_id=array();
$course_id=array();
$teachermatch=false;
/******************先判断搜索内容是否为老师名字 *******************/
if($newstr[0]){
$teasql="select * from t_teacher where m_teacher like '$newstr[0]%'";
for($j=1;$j<count($newstr);$j++){
    $teasql.=" or m_teacher like '$newstr[$j]%'";
}
$rs=$conn->query($teasql);
if($rs){
    while($row=mysqli_fetch_array($rs)){
        $teacher_id[]=$row['m_teacherid'];
    }
    if(count($teacher_id))
      $teachermatch=true;
    else
      $teachermatch=false;
}
else
    $teachermatch=false;
}
if($teachermatch==false){
	//没有搜索到老师的情况
	/*******************搜索课程*********************/
	if($newstr==false) $myrow_class=array();
	else{
		if(count($newstr)==1)
			$sql="select * from ".tb_table_course." where m_course like '%$newstr[0]%' or m_content like '%$newstr[0]%' order by m_numconcern desc";
		else{
			for($i=0;$i<count($newstr);$i++){
				$sql1.=" m_course like '%$newstr[$i]%' or";
				$sql2.=" m_content like '%$newstr[$i]%' and";
			}
			$sql2=substr($sql1,0,-3);
			$sql="select * from ".tb_table_course." where".$sql1.$sql2."order by m_numconcern desc";
		}
		$myrow_class=$seppage->ShowCourse($sql,$conn,pagesize,$_GET["pagec"]);
	}
	/*******************搜索视频*********************/
	if($newstr==false) $myrow_chapter=array();
	else{
		if(count($newstr)==1)
			$sql3="select * from ".tb_table_chapter." where m_chapter like '%$newstr[0]%' order by m_numconcern desc";
		else{
			for($i=0;$i<count($newstr);$i++){
				$sql4.=" m_chapter like '%$newstr[$i]%' or";
			}
			$sql4=substr($sql4,0,-2);
			$sql3="select * from ".tb_table_chapter." where".$sql4."order by m_numconcern desc";
		  }
			$myrow_chapter=$seppagep->ShowChapter($sql3,$conn,pagesize,$_GET["pagep"]);	
	}
}
else if($teachermatch==true){
	/**************搜索到老师的情况******************/
    $coursesql="select m_courseid from t_teacourse where m_teacherid=$teacher_id[0]";
    for($i=1;$i<count($teacher_id);$i++){
        $coursesql.=" or m_teacherid=$teacher_id[$i]";
    }
    $rs=$conn->query($coursesql);
    $course_id=array();
    if($rs){
        while($row=mysqli_fetch_array($rs)){
            $course_id[]=$row['m_courseid'];
        }    
	    $sql="select * from ".tb_table_course." where m_courseid=$course_id[0]";
	    for($i=1;$i<count($course_id);$i++){
		    $sql.=" or m_courseid=$course_id[$i]";
	    }
	    $myrow_class=$seppage->ShowCourse($sql,$conn,pagesize,$_GET["pagec"]);
    }
    //根据course_id 显示课程；
	
}
?>
