<?php
  include ('include_fns.php');
  if($id = store_new_post($_POST)) {
      //    include('forum.php');
  header("Location: forum.php");
  } else  {
    $error = true;
//    include ('new_post.php');
  }

?>
