
<?php
 session_start();
 if(isset($_GET['courseid']))
  {
    $_SESSION['courseid'] = $_GET['courseid'];
  }
// first_page();
 	$COURSEID = $_SESSION['courseid'];
// echo $COURSEID;
 //function first_page(){
    $USER = $_SESSION['valid_user']; 
  include ('include_fns.php');

  if(!isset($_SESSION['expanded']))  {
    $_SESSION['expanded'] = array();
  }
    
  // check if an expand button was pressed
  // expand might equal 'all' or a postid or not be set
  if(isset($_GET['expand']))   {
    if($_GET['expand'] == 'all') {
      expand_all($_SESSION['expanded']);
    } else {
      $_SESSION['expanded'][$_GET['expand']] = true;
    }
  }

  // check if a collapse button was pressed
  // collapse might equal all or a postid or not be set
  if(isset($_GET['collapse'])) {
    if($_GET['collapse']=='all') {
      $_SESSION['expanded'] = array();
    } else {
      unset($_SESSION['expanded'][$_GET['collapse']]);
    }
  }
//  global  $CHAPTERID;
//  echo $CHAPTERID;
  display_index_toolbar();
//  echo $USER;
  // echo $CHAPTERID;
   // display the tree view of conversations
  display_tree($COURSEID,$_SESSION['expanded'],$USER);

  display_new_post_form($COURSEID,$USER);
//}
?>
<table  width="100%">
<tr>
  <td height="80" style="text-align:center;font-family:微软雅黑;font-size:20px;">&#169; 版权所有 | 设计者 &nbsp;烫烫烫烫的130</td>
</tr>
</table>
