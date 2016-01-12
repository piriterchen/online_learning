<?php

require_once('db_fns.php');

function register($username, $identity, $email, $password) {
// register new person with db
// return true or error message

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from t_user where m_user='".$username."'");
  if (!$result) {
    throw new Exception('无法连接数据库');
  }

  if ($result->num_rows>0) {
    throw new Exception('That username is taken - go back and choose another one.');
  }

  // if ok, put in db
  $result = $conn->query("insert into t_user (m_user,m_identity,m_password,m_email) values
                         ('".$username."', '".$identity."',sha1('".$password."'), '".$email."')");
  
  if (!$result) {
    throw new Exception('无法将您的信息录入数据库，请您稍后再试.');
  }
  return true;
}

function login($username, $identity, $password) {
// check username and password with db
// if yes, return true
// else throw exception

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from t_user
                         where m_user='".$username."'
						             and m_identity='".$identity."'
                         and m_password = sha1('".$password."')");
  if (!$result) {
     throw new Exception('无法连接数据库');
    
  }

  if ($result->num_rows==1) {
		$row=$result->fetch_row();
		$user_id=$row[0];
    return $user_id;
  } 
  else {
     throw new Exception('您的用户名与密码不匹配');
   
  }
}

function check_valid_user() {
// see if somebody is logged in and notify them if not
  if (isset($_SESSION['valid_user']))  {
      return true;
  } else {
     // they are not logged in
     echo "您还未登录";
     return false;
  }
}

function change_password($username, $identity, $old_password, $new_password) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else throw an exception
  login($username, $identity, $old_password);
  $conn = db_connect();
  $result = $conn->query("update t_user
                          set m_password = sha1('".$new_password."')
                          where m_user = '".$username."'");
  if (!$result) {
    throw new Exception('无法更改密码');
  } else {
    return true;  // changed successfully
  }
}

function get_random_word($min_length, $max_length) {
// grab a random word from dictionary between the two lengths
// and return it

   // generate a random word
  $word = '';
  // remember to change this path to suit your system
  $dictionary = '../words';  // the ispell dictionary
  $fp = @fopen($dictionary, 'r');
  if(!$fp) {
    return false;
  }
  $size = filesize($dictionary);

  // go to a random location in dictionary
  $rand_location = rand(0, $size);
  fseek($fp, $rand_location);

  // get the next whole word of the right length in the file
  while ((strlen($word) < $min_length) || (strlen($word)>$max_length) || (strstr($word, "'"))) {
     if (feof($fp)) {
        fseek($fp, 0);        // if at end, go to start
     }
     $word = fgets($fp, 80);  // skip first word as it could be partial
     $word = fgets($fp, 80);  // the potential password
  }
  $word = trim($word); // trim the trailing \n from fgets
  return $word;
}

function reset_password($username) {
// set password for username to a random value
// return the new password or false on failure
  // get a random dictionary word b/w 6 and 13 chars in length
  $new_password = get_random_word(6, 13);

  if($new_password == false) {
    throw new Exception('无法产生新密码');
  }

  // add a number  between 0 and 999 to it
  // to make it a slightly better password
  $rand_number = rand(0, 999);
  $new_password .= $rand_number;

  // set user's password to this in database or return false
  $conn = db_connect();
  $result = $conn->query("update t_user
                          set m_password = sha1('".$new_password."')
                          where m_user = '".$username."'");
  if (!$result) {
    throw new Exception('无法更改密码');  // not changed
  } else {
    return $new_password;  // changed successfully
  }

}

function notify_password($username, $password) {
// notify the user that their password has been changed

    $conn = db_connect();
    $result = $conn->query("select m_email from t_user
                            where m_user='".$username."'");
    if (!$result) {
      throw new Exception('无法找到邮箱地址.');
    } else if ($result->num_rows == 0) {
      throw new Exception('无效的用户名');
      // username not in db
    } else {
      $row = $result->fetch_object();
      $email = $row->m_email;
      $from = "From: support@online_learning \r\n";
      $mesg = "您的在线学习系统密码已更改为".$password."。\r\n"
              ."下次登录请注意更换！\r\n";

      if (mail($email, 'Onlinelearning', $mesg, $from)) {
        return true;
      } else {
        throw new Exception('无法发送邮件.');
      }
    }
}

?>
