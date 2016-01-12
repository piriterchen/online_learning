  
  <?php
  require_once('../register/db_fns.php');

  require_once('./data_relation.php');
  ?><script>
  function jump(addr){
    window.parent.location.href=addr;
  }
  </script>
  <?php
  session_start();
  $username = $_SESSION['valid_user'];
  $useridentity = $_SESSION['user_identity'];
  $userid = $_SESSION['userid'];
  if(isset($username)&&isset($useridentity)){
    ?>

    <hr/>
    <p>您订阅的课程：</p>
    <?php

    $conn = db_connect();
    $result = $conn->query("select m_courseid
                          from t_userconcern
                          where m_userid = '".$userid."'");
    if(!result){
      return false;
    }
    if ($result->num_rows == 0){    
      echo '您还没有订阅任何课程';
    }
    else{
      ?>
      <table>
        <?php
        for ($count = 1; $row = $result->fetch_row(); ++$count) {       
        ?>
          <tr>
            <td>

            <a href="javascript:jump('../course.php?courseid=<?php $course_id = $row[0];echo $course_id;?>')"><?php $course_id = $row[0];echo get_coursename($course_id);?></a> 
            
            </td>
            <td>
            <?php echo get_teacher($row[0]);?>
            </td>
          </tr>
          <?php
        }
      ?>
      </table>
      <?php
    }    
  } 
  ?> 
