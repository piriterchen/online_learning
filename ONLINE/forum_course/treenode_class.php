<?php
// functions for loading, contructing and
// displaying the tree are in this file

include ('include_fns.php');

class treenode {
  // each node in the tree has member variables containing
  // all the data for a post except the body of the message
  public $m_postid;
  public $m_courseid;
  public $m_title;
  public $m_poster;
  public $m_posted;
  public $m_children;
  public $m_childlist;
  public $m_depth;

  public function __construct($postid, $courseid, $title, $poster, $posted, $children,
                    $expand, $depth, $expanded, $sublist)   {
    // the constructor sets up the member variables, but more
    // importantly recursively creates lower parts of the tree
    $this->m_postid = $postid;
    $this->m_courseid = $courseid;
    $this->m_title = $title;
    $this->m_poster = $poster;
    $this->m_posted = $posted;
    $this->m_children =$children;
    $this->m_childlist = array();
    $this->m_depth = $depth;

    // we only care what is below this node if it
    // has children and is marked to be expanded
    // sublists are always expanded
    if(($sublist || $expand) && $children) {
      $conn = db_connect();

      $query = "select * from t_crforum_header where parent = '".$postid."' and courseid = '".$courseid."' order by posted";
      $result = $conn->query($query);
      if($result){
      for ($count=0; $row = @$result->fetch_assoc(); $count++)  {
        if($sublist || $expanded[$row['postid']] == true) {
          $expand = true;
        } else {
          $expand = false;
        }
        $this->m_childlist[$count]= new treenode($row['postid'],$row['courseid'], $row['title'],
                   $row['poster'],$row['posted'],
                   $row['children'], $expand,
                   $depth+1, $expanded, $sublist);
      }
     }
    }
  }
 

  function display($courseid,$user,$row, $sublist = false)   {
    // as this is an object, it is responsible for displaying itself

    // $row tells us what row of the display we are up to
    // so we know what color it should be

    // $sublist tells us whether we are on the main page
    // or the message page.  Message pages should have
    // $sublist = true.
    // On a sublist, all messages are expanded and there are
    // no "+" or "-" symbols.

    // if this is the empty root node skip displaying
    if($this->m_depth>-1) {
      //color alternate rows
      echo "<tr><td bgcolor=\"";
      if ($row%2) {
        echo "#cccccc\">";
      } else {
        echo "#ffffff\">";
      }

      // indent replies to the depth of nesting
//      for($i = 0; $i < $this->m_depth; $i++)  {
//        echo "<img src=\"images/spacer.gif\" height=\"22\"
//                   width=\"22\" alt=\"\" valign=\"bottom\" />";
//      }
      if ( !$sublist && $this->m_children && sizeof($this->m_childlist)) {
        // we are expanded - offer button to collapse
        echo "<a href=\"forum.php?collapse=".
                 $this->m_postid."#".$this->m_postid."\"><img
                 src=\"./images/minus.png\" valign=\"bottom\" height=\"22\"
                 width=\"22\" alt=\"Collapse Thread\" border=\"0\" /></a>\n";
      } else if(!$sublist && $this->m_children) {
        // we are collapsed - offer button to expand
        echo "<a href=\"forum.php?expand=".
                 $this->m_postid."#".$this->m_postid."\"><img
                 src=\"./images/plus.png\" valign=\"bottom\" height=\"22\"
                 width=\"22\" alt=\"Expand Thread\" border=\"0\" /></a>\n";
      }

      // display + or - or a spacer
      $post = get_post($this->m_postid);
      $post_parent = $post['postid'];
      $_SESSION['parent'] = $post_parent;
//      echo $_SESSION['parent'];
//      echo "$this->m_postid";
      //      echo "$post_parent";
?>

    <script>
    function $(el) {return document.getElementById(el)};
    function response(obj,post_parent)
    {
        var v_user = '<?php echo $_SESSION['valid_user']; ?>';
        if(!v_user){
          alert("请先登录");
          return false;
        }
        else{
          var oComment = obj.parentNode;
          var txt = obj.innerHTML;
//        var i = <?php echo $post_parent;?>;
        //        document.write(i);
          var h_parent = $("parent");
          h_parent.value = post_parent;
          if (txt == '回复') {
             $("response").style.display = "inline";
           }
          else {
            $("response").style.display = "none";
           }
//        oComment.appendChild($("response"));
          oComment.appendChild($("form"));
          return true;
        }
    }
    </script>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:'微软雅黑';font-size:15px;">
    <tr>
      <td align="left">
    <?php
      for($i = -1;$i < $this->m_depth; $i++)
      {
    ?>    
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <?php
      }   
    ?>
      <?php 
      // display + or - or a spacer
      $conn = db_connect();
      $muser = $this->m_poster;
      $query = "select m_identity from t_user where m_user='".$muser."'";
      $result = $conn->query($query);
      if(!$result){
        return false;
      }
      if($result->num_rows>0){
       $this_row = $result->fetch_array();
//       echo $this_row[0];
      }
      if("1" == $this_row[0]){
       echo "老师:";
      }
      else{
       echo "学生:";
      }
      echo $this->m_poster; 
      ?>
      </td>
       <td align="right">
       <?php echo reformat_date($this->m_posted); ?>
       </td>
    </tr>
    <tr>
       <td colspan="2">
    <?php
      for($i = -1;$i < $this->m_depth; $i++)
      {
    ?>    
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <?php
      }   
    ?>
       <?php echo nl2br($post['message']); ?> 
       </td>
    </tr>
    <tr>
       <td colspan="2" style="text-align:right">
       <div onclick="response(this,<?php echo $post_parent;?>);" style="color:blue;cursor:pointer;">回复</div>
       </td>
     </tr>
    </tr>
    </table>
<?php
      // increment row counter to alternate colors
//      $row++;
    }
    // call display on each of this node's children
    // note a node will only have children in its list if expanded
    $num_children = sizeof($this->m_childlist);
    for($i = 0; $i<$num_children; $i++) {
      $row = $this->m_childlist[$i]->display($chapterid,$user,$row, $sublist);
    }
    return $row;
  }

}
?>
<script> 
 function f_warning(form){
    var m_value = !form.message.value.length;
    if(m_value){
      alert('请输入回复内容');
      return false;
    }
    else{
      return true;
    }
 }
</script>           
  <form id="form" action="store_new_post.php"  method="post" name="form_2"> 
    <div id="response" style="display:none;">
       <input type="hidden" id="parent" name="parent" value="1"/>
       <input type="hidden"  name="area" value="1"/>
       <input type="hidden"  name="courseid" value="<?php echo $_SESSION['courseid']; ?>">
       <input type="hidden"  name="poster" value="<?php echo $_SESSION['valid_user']; ?>">
       <input type="hidden"   name="title" value="hi"/>
       <textarea name="message" style="width:90%;height:150px"></textarea>
       <input style="height:30px;background:#1E90FF;color:#FFF;font-size:15px;font-family:'微软雅黑';" value="回复" type="submit" onclick="return f_warning(form_2);"/>
    </div>
  </form> 
<?php
?>
