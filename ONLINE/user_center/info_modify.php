<?php
	require_once('../register/db_fns.php');
	session_start();
	$real_name = $_POST['realname'];
	$description = $_POST['self_description'];
	$teacher_id = $_SESSION['userid'];
	echo $real_name;
	echo $description;		
	$conn = db_connect();
	$conn->query("set names utf8");
	$result=$conn->query("update t_teacher
                  set m_teacher = '".$real_name."',
                  m_description = '".$description."'
                  where m_teacherid = '".$teacher_id."'");
    $sql="select m_courseid from t_teacourse where m_teacherid=$teacher_id";
    $rs=$conn->query($sql);
    $courseid=array();
    if($rs){
        while($row=mysqli_fetch_array($rs)){
            $courseid[]=$row['m_courseid'];
        }
        $sql="update t_course set m_teacher = '".$real_name."' where m_courseid=$courseid[0]";
        for($i=1;$i<count($courseid);$i++){
            $sql.=" or m_courseid=$courseid[$i]";
        }
        $result=$conn->query($sql);
    }
	if(!$result){
		echo "<script>alert('很抱歉修改失败！');window.location.href='./user_info.php';</script>";
	}
	else{
		echo "<script>alert('恭喜您修改成功！');window.location.href='./user_info.php';</script>";

	}
    
?>
