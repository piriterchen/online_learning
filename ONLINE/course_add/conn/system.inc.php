<?php
require("system.class.inc.php");
//数据库连接类实例化
$connobj=new ConnDB("mysql","localhost","root","root","db_database18");
$conn=$connobj->GetConnId();
//数据库操作类实例化
$admindb=new AdminDB();
//分页类实例化
$seppage=new SepPage();
//字符串截取类
$unhtml=new UseFun();

?>