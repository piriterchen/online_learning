<?php
  require("./conn/config.php");
  session_start();
  $DB= new ConnDB(dbtype,host,user,pwd,dbname);
	$conn=$DB->GetConnId();
	$courseid_array=array();
  $username = $_SESSION['valid_user'];
  $userid = $_SESSION['userid'];
  $useridentity = $_SESSION['user_identity'];
  if(isset($username)&&isset($useridentity)){
  	$result = $conn->query("select m_courseid from t_userconcern where m_userid = $userid");
  	if($result){
  		while($row=mysqli_fetch_array($result)){
				$courseid_array[]=$row['m_courseid'];
			}
  	}
  	$course_sql="select * from t_course where m_courseid=$courseid_array[0]";
		for($i=1;$i<count($courseid_array);$i++){
			$course_sql.=" or m_courseid=$courseid_array[$i]";
		}
		$coursepage=new SepPage();
		$myrow_course=$coursepage->ShowCourse($course_sql,$conn,3,$_GET["pagec"]);
  }
?>
