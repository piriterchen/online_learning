<?php
$table_width = '90%';

function reformat_date($datetime) {
  // put date in US format, discard seconds
  list($year, $month, $day, $hour, $min, $sec) = split( '[: -]', $datetime );
  return "$year/$month/$day $hour:$min";
}

function display_tree($courseid, $expanded,$user, $row = 0, $start = 0) {
  // display the tree view of conversations

  global $table_width;
  echo "<table width=\"".$table_width."\">";

  // see if we are displaying the whole list or a sublist
  if($start>0) {
    $sublist = true;
  } else {
    $sublist = false;
  }

  // construct tree structure to represent conversation summary
  $tree = new treenode($start,$courseid,'', $user, '', 1, true, -1, $expanded, $sublist);

  // tell tree to display itself
  $tree->display($courseid,$user,$row, $sublist);

  echo "</table>";
}
 
function display_replies_line() {
  global $table_width;
?>
  <table width="<?php echo $table_width; ?>" cellpadding="4"
         cellspacing="0" bgcolor="#cccccc">
  <tr><td><strong>Replies to this message</strong></td></tr>
  </table>
<?php
}

function display_index_toolbar()
{
  global $table_width;
?>
  <table width="<?php echo $table_width; ?>" cellpadding="4" cellspacing="0" height="50" border="1" frame=hsides rules=none style="solid;rgb(150,150,150);">
  <tr>
   <td bgcolor="#FFF" align="left">
   <img src="./images/taolun.jpg" width="45" height="45">
   <span style="font-weight:bold;color:#009;font-size:36px;font-family:'微软雅黑';">跟 帖</span>
   </td>
    <td bgcolor="#FFF" align="right">
<!--      <a href="new_post.php?parent=0"><img src="images/new-post.gif"
             border="0" width="99" height="39"></a>-->
      <a href="forum.php?expand=all" style="font-size:20px; text-decoration:none; font-family:'微软雅黑';"> 展开</a>
      <a href="forum.php?collapse=all" style="font-size:20px; text-decoration:none; font-family:'微软雅黑';"> 收缩</a>
    </td>
  </tr>
  </table>
<?php
}

function display_new_post_form($courseid, $poster, $parent = 0, $area = 1, $message='',$title='hi') {
    global $table_width;
    if($message!=''){
        echo stripslashes($message);
    }
?>
<?php
    $temp = $_SESSION['valid_user'];
?>
  <script>
    function h_warning(form){
        //      alert('111111111111');
        var v_user = '<?php echo $temp; ?>';
        if(!v_user){
          alert('请先登录');
          return false;
        }
        else{
          var m_value = !form.message.value.length;
//          alert(m_value);
//          return false;
         if(m_value){
           alert('请输入发表内容');
           return false;
         }
         else{
             return true;
         }
        }
  }
  </script>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <span style="font-family:'微软雅黑';font-size:24px;">请文明发言!</span>
  <table cellpadding="0" cellspacing="0" border="0" width="<?php echo $table_width; ?>">
  <form action="store_new_post.php?expand=<?php echo $parent;?>#<?php echo $parent;?>"
        method="post" name="form1" >
<!--  <tr>
    <td bgcolor="#cccccc">Your Name:</td>
    <td bgcolor="#cccccc"><input type="text" name="poster"
        value="<?php echo $poster; ?>" size="20" maxlength="20"/>
    </td>
  </tr> 
  <tr>
    <td bgcolor="#cccccc">Message Title:</td>
    <td bgcolor="#cccccc"><input type="text" name="title"
        value="<?php echo $title; ?>" size="20" maxlength="20" /></td>
  </tr>-->
  <tr>
    <td>
      <textarea name="message" style="width:100%;height:120px"></textarea>
    </td>
  </tr>
  <tr>
    <td height="40" align="right">
      <input type="submit" style="height:100%;width:70px;background:#1E90FF;color:#FFF;font-size:18px;font-family:'微软雅黑';" name="post" value="发表"
              alt="Post Message" onclick="return h_warning(form1);" /> 
    </td> 
<!--    <td  align="right" bgcolor="#cccccc">
      <a href="forum.php?expanded=<?php echo $post['postid']; ?>">
      <input type="button" name="cancel" value="CANCEL"/>
    </td>  -->
    <input type="hidden" name="parent" value="<?php echo $parent; ?>">
    <input type="hidden" name="area" value="<?php echo $area; ?>">
    <input type="hidden" name="courseid" value="<?php echo $courseid; ?>">
    <input type="hidden" name="poster" value="<?php echo $poster; ?>">
    <input type="hidden" name="title" value="<?php echo $title; ?>">
  </tr>
  </form>
  </table>
<?php
}
?>
