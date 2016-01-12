<?php

// include function files for this application

session_start();
$old_user = $_SESSION['valid_user'];
$old_user_identity = $_SESSION['user_identity'];

// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
unset($_SESSION['user_identity']);
$result_dest = session_destroy();

// start output html


if (!empty($old_user)) {
  if ($result_dest)  {
    // if they were logged in and are now logged out
    Header("location:../index.php");

  } else {
   // they were logged in and could not be logged out
    echo 'Could not log you out.<br />';
  }
} else {
  // if they weren't logged in but came to this page somehow
  echo 'You were not logged in, and so have not been logged out.<br />';

}




?>
