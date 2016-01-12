<?php

// include function files for this application

require_once('db_fns.php');

require_once('user_auth_fns.php');

session_start();

//create short variable names
$identity = $_POST['identity'];
$username = $_POST['username'];
$passwd = $_POST['passwd'];

if ($username && $passwd) {

// they have just tried logging in
  try  {
    $temp=login($username,$identity, $passwd);
      $_SESSION['valid_user'] = $username;
      $_SESSION['user_identity'] = $identity;
      $_SESSION['userid']=$temp;
    
    // if they are in the database register the user id
    
  }
  catch(Exception $e)  {
    // unsuccessful login
    $_SESSION['login_error'] = 1;
    $temp1 = $_SERVER['HTTP_REFERER'];
    Header("location:$temp1");
    exit;
  }
}
else{
    $_SESSION['login_error'] = 1;

}
$temp1 = $_SERVER['HTTP_REFERER'];

Header("location:$temp1");




?>