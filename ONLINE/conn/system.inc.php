<?php
require("system.class.inc.php");
//���ݿ�������ʵ����
$connobj=new ConnDB("mysql","localhost","root","root","db_database18");
$conn=$connobj->GetConnId();
//���ݿ������ʵ����
$admindb=new AdminDB();
//��ҳ��ʵ����
$seppage=new SepPage();
//�ַ�����ȡ��
$unhtml=new UseFun();

?>