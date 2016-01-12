<?php
require("./conn/config.php");
//获取课程的ID号
$courseid=$_GET['courseid'];
$DB= new ConnDB(dbtype,host,user,pwd,dbname);
$conn=$DB->GetConnId();
$chapterid_sql="select * from ".tb_table_chapter." where m_courseid=$courseid order by m_chapterindex asc";
$chapterpage=new SepPage();
$myrow_chapter=$chapterpage->ShowChapter($chapterid_sql,$conn,3,$_GET["pagep"]);
?>