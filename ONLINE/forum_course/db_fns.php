<?php

function db_connect() {
	
$vcap_services = json_decode(getenv("VCAP_SERVICES"));
$db = $vcap_services->{'mysql'}[0]->credentials;
$mysql_database = $db->name;
$mysql_port=$db->port;
$mysql_server_name =$db->hostname . ':' . $db->port;
$mysql_username = $db->username; 
$mysql_password = $db->password; 

   //$result = new mysqli($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);
   $result = new mysqli('localhost', 'root', 'piriter', 'online_learning');
   //$result = new mysqli('localhost', 'root', 'NO7987095', 'db_class');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
