<?php
  require_once('./user_auth_fns.php');
  require_once('./data_valid_fns.php');

  session_start();
  // create short variable names
  $identity = $_POST['identity'];
  $old_passwd = $_POST['old_passwd'];
  $new_passwd = $_POST['new_passwd'];
  $new_passwd2 = $_POST['new_passwd2'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('您的表单未填写完整');
    }

    if ($new_passwd != $new_passwd2) {
       throw new Exception('新密码输入不一致');
    }

    if ((strlen($new_passwd) > 16) || (strlen($new_passwd) < 6)) {
       throw new Exception('新密码程度必须为6至16位');
    }

    // attempt update
    change_password($_SESSION['valid_user'], $identity, $old_passwd, $new_passwd);
    echo "<script>alert('密码修改成功!');window.location.href='./passwd_modify.php';</script>";
  }
  catch (Exception $e) {
    $type_error=$e->getMessage();
    echo "<script>alert('$type_error;');window.location.href='./passwd_modify.php';</script>";

  }
 
?>
