<?php


function db_connect() {
$vcap_services = json_decode(getenv("VCAP_SERVICES"));
$db = $vcap_services->{'mysql'}[0]->credentials;
$mysql_database = $db->name;
$mysql_port=$db->port;
$mysql_server_name =$db->hostname . ':' . $db->port;
$mysql_username = $db->username; 
$mysql_password = $db->password; 

   $M_CONNECT_ADD = $mysql_server_name;
   $M_USER = $mysql_username;
   $M_PASSWORD = $mysql_password;
   $M_DATABASE = $mysql_database;
//  global $M_DATABASE;
   //$result = new mysqli($M_CONNECT_ADD, $M_USER, $M_PASSWORD, $M_DATABASE);
  // $result = new mysqli('localhost', 'root', 'NO7987095', 'db_class');
  $result = new mysqli('localhost', 'root', 'piriter', 'online_learning');
   if (!$result) {
      return false;
   }
   return $result;
}

?>
