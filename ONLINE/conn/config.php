﻿<?php
$vcap_services = json_decode(getenv("VCAP_SERVICES"));
$db = $vcap_services->{'mysql'}[0]->credentials;
$mysql_database = $db->name;
$mysql_port=$db->port;
$mysql_server_name =$db->hostname . ':' . $db->port;
$mysql_username = $db->username; 
$mysql_password = $db->password;
require("./conn/system.class.inc.php");
require("./conn/table_change.php");
define('tb_table_course',"t_course");
define('tb_table_chapter',"t_chapter");
define('tb_table_teacher',"t_teacher");
define('tb_table_teacourse',"t_teacourse");
/*define('dbtype',"mysql");
define('host',$mysql_server_name);
define('user',$mysql_username);
define('pwd',$mysql_password);
define('dbname',$mysql_database);*/

define('dbtype',"mysql");
define('host',"localhost");
define('user',"root");
define('pwd',"piriter");
define('dbname',"online_learning");

define('pagesize',3);
?>
