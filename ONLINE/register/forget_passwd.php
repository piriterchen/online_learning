<?php
  require_once("./user_auth_fns.php");
  require_once("./db_fns.php");
  echo 1;
  // creating short variable name
  $username = $_POST['username'];
  $identity = $_POST['identity'];
  $mailbox = $_POST['mailbox'];
  try {
    $conn = db_connect();
    $result = $conn->query("select * from t_user
                         where m_user='".$username."'
                         and m_identity='".$identity."'
                         and m_email='".$mailbox."'");
    echo $result->num_rows;
    if($result->num_rows != 1){
      echo "<script>alert('很抱歉您的用户名与邮箱不一致！');window.location.href='./passwd_forget_display.php';</script>";
      return false;
    }


    $password = reset_password($username);

    notify_password($username, $password);
    echo "<script>alert('恭喜您更改成功！请前往您的邮箱查看您重置后的密码！');window.location.href='./passwd_forget_display.php';</script>";
  }
  catch (Exception $e) {
    echo "<script>alert('很抱歉无法重置，请您重试！');window.location.href='./passwd_forget_display.php';</script>";
  }
  
?>