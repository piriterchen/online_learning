<?php
include_once("./course_chapter.php");
if($num=count($myrow_chapter[0])){
	for($i=0;$i< $num;$i++){
		$chapter_index=$myrow_chapter[5][$i];
		$deleteid="delete".$chapter_index;
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