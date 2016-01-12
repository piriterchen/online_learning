
<?php
  // include function files for this application

  require_once('./user_auth_fns.php');
  require_once('./data_valid_fns.php');
  require_once('./db_fns.php');

  //create short variable names
  header("Content-type:text/html;charset=utf-8");
  $identity=$_POST['identity'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  try   {

    // check forms filled in
    if (!filled_out($_POST)) {
      throw new Exception('你没有正确填写表格，请重新尝试.');
    }

    // email address not valid
    if (!valid_email($email)) {
      throw new Exception('这不是一个有效的邮箱地址，请重新输入.');
    }

    // passwords not the same
    if ($passwd != $passwd2) {
      throw new Exception('你输入的密码不匹配，请重新输入.');
    }

    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    if ((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
      throw new Exception('密码的长度为6-16位.');
    }

    // attempt to register
    // this function can also throw an exception
    if(register($username, $identity, $email, $passwd)){
      // register session variable
      $_SESSION['valid_user'] = $username;
      $_SESSION['user_identity']= $identity;
      $temp=login($username,$identity, $passwd);
      $_SESSION['userid']=$temp;

      $conn = db_connect();
      $result = $conn->query("insert into t_teacher (m_teacherid) values
                         ('".$temp."')");
      if (!$result) {
        throw new Exception('Could not 11111register you in database - please try again later.');
      }


      // provide link to members page
      echo "<script>alert('恭喜您注册成功！');window.location.href='../index.php';</script>";

    }
    // end page
  }
  catch (Exception $e) {
     $_SESSION['register_error'] = $e->getMessage();    
     Header("location:register_display.php");

     exit;
  }
?>
