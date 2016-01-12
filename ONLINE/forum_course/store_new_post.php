<?php
 include ('include_fns.php');
  
//store_new_post($_POST);
//include('forum.php');
 if($id = store_new_post($_POST)) {
//    echo "hello";
 //   echo $id;
//    include ('forum.php');
 header("Location: forum.php");
  } else  {
    $error = true;
//    include ('new_post.php');
  }
// header("Location: forum.php");
?>
