<!DOCTYPE html>
<html>
<head>
<title>Learn a education</title>
<link href="./css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="./css/style_index.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript">
			function check(form){
				if(form.keyword.value==""||form.keyword.value=="请输入关键字"){
					alert("请输入关键词");
					form.keyword.focus();
					return false;
				}
				form.submit();
			}
		</script>
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
</head>
<body>
<script>
  function openLogin(){
    document.getElementById("win").style.display="block";
    document.getElementById("back").style.display="block";
    showback();
  }
  function closeLogin(){
    document.getElementById("win").style.display="none";
    document.getElementById("back").style.display="none";
  }
  function showback(){
var sWidth,sHeight,stop;
sWidth = screen.width;
sWidth = document.body.offsetWidth;
sHeight=document.body.offsetHeight;
stop = document.getElementById("win").style.top;
if (sHeight<screen.height){sHeight=screen.height;}
document.getElementById("back").style.width = sWidth + "px";
document.getElementById("back").style.height = sHeight + "px";
document.getElementById("back").style.display = "block";
document.getElementById("back").style.display = "block";
document.getElementById("back").style.right = document.getElementById("win").offsetLeft + "px";
}
</script>

<?php
OB_START();
session_start();
if($_SESSION['login_error'] == 1){
	?>	
<div id=back style="display:block; POSITION:absolute; left:0%; top:0%; width:100%; height:100%; margin-left:0px; margin-top:0px;background-color:black; text-align:center; opacity:0.6; filter:alpha(opacity=60);z-index:100;"></div>

<div id=win style="display:block; POSITION:absolute; left:50%; top:50%; width:800px; height:400px; margin-left:-400px; margin-top:-270px; border:1px solid #888; background-color:white; text-align:center; opacity:1.0; filter:alpha(opacity=100);z-index:10000;">

<?php		
}
else{
	?>
<div id=back style="display:none; POSITION:absolute; left:0%; top:0%; width:100%; height:100%; margin-left:0px; margin-top:0px;background-color:black; text-align:center; opacity:0.6; filter:alpha(opacity=60);z-index:100;"></div>

<div id=win style="display:none; POSITION:absolute; left:50%; top:50%; width:800px; height:400px; margin-left:-400px; margin-top:-270px; border:1px solid #888; background-color:white; text-align:center; opacity:1.0; filter:alpha(opacity=100);z-index:10000;">
<?php
}
	?>
	        <div style="position:relative; left:5px;top:10px;"><p style = "text-align:left;font-size:20px;font-family:'微软雅黑';">请您登录</p> </div>
	        <hr/>
	        <div style = "float:left; position:relative; left:5px;top:5px;width:395px;height:250px;padding-top:50px;padding-bottom:50px;padding-left:80px;border-right:solid 3px grey;">        
	        <form method="post" action="./register/login.php">
	        <table style ＝ "vertical-align:center;" bgcolor="#cccccc" padding-left = "5px">
	        <tr>
	        <td><p style = "font-size:20px;margin-bottom:20px;font-family:'微软雅黑';">用户名:</p></td>
	        <td><input type="text" style="width:150px;margin-bottom:20px;font-family:'微软雅黑';font-size:18px;" name="username"/></td></tr>
	        <tr>
	        <td><p style = "font-size:20px;margin-bottom:20px;font-family:'微软雅黑';">密码:</p></td>
	        <td><input type="password" style="width:150px;margin-bottom:20px;font-family:'微软雅黑';font-size:18px;" name="passwd"/></td></tr>
	        <tr>
	        <td style = "font-size:20px;font-family:'微软雅黑';margin-bottom:20px;">身份:</td>
	        <td style="font-size:20px;margin-bottom:20px;font-family:'微软雅黑';"><input type = "radio" name = "identity" value="1"checked/>老师
	        <input type = "radio" name = "identity" value="0"/> 学生</td></tr>
	        <tr>
	        <td><a href="./register/forgot_form.php" id="button_register"><p style = "font-size:20px;align:center;margin-top:20px;">忘记密码?</p></a></td>
	        <td style = "font-size:20px;text-align:right;margin-top:20px;">
	        <input type="submit" value="登录" class="btn-primary" style="margin-top:20px;"/></td></tr>
	        <?php
	        //session_start();
				if($_SESSION['login_error'] == 1){
				?>
					<tr><td style = "font-size:16px;color:red;text-align:left;font-family:'微软雅黑';" colspan='2'>用户名或密码错误</td></tr>
					<?php 
					unset($_SESSION['login_error']);

				}
			?>
	        </table>
	        </form>
	        </div>
	        <div style = "float:left;width:395px;height:250px;padding-top:50px;padding-bottom:50px;padding-left:80px;font-family:'微软雅黑'">
	          <table style ＝ "vertical-align:center;" bgcolor="#cccccc" padding-left = "5px">
	          <tr><td style = "font-size:20px">你可以在登录后享用以下服务</td></tr>
	          <tr><td>    
	            <ul style = "text-align:left;font-size:20px">
	            <li>订阅感兴趣课程</li>
	            <li>开设新课程</li>
	            <li>参与课程讨论</li>
	            </ul>
	          </td></tr>
	          <tr><td style = "font-size:16px;text-align:left;">
	          <a href="./register/register_display.php" id="button_register">创建新账户?</a>
	          </td></tr>
	          </table>
	        </div>
	        <div style="clear:both;height:0;overflow:hidden;width:100%;margin:0;padding:0;"> </div>
	        <hr/>
	        <div style="width:100%;height:100%;text-align:center;font-size:20px"><a href="javascript:closeLogin();" id="button_register">关闭登录框</a></div>
</div>
<!-- 复制进来1 end!-->

<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="./index.php">Online 学习 </a></h1>
		</div>
		<div class="h_search navbar-right">
			<form action="./search.php" id="form_search" name="form_search" method="POST">
				<input type="text" name="keyword" id="keyword" class="text" value="请输入关键字" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入关键字';}">
				<input type="submit" value="搜索" onclick="return check(form_search);">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation" style="background:#3B3B3B;">
		    <!-- Brand and toggle get grouped for better mobile display -->
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="./index.php">主页</a></li>
	        <?php
	        	session_start();
	        	if(isset($_SESSION['valid_user'])&&isset($_SESSION['user_identity'])){
	        	?>
	        		<li><a href="./course_add/user_center.php">个人中心</a></li>
	        	<?php
	        	}
	        ?>
	      </ul>

	  </nav>
		<nav class="navbar navbar-default navbar-right" role="navigation">
	      <ul class="nav navbar-nav" style="background:#3B3B3B;">
	      	<?php
	      	if(isset($_SESSION['valid_user'])&&isset($_SESSION['user_identity'])){
	      		?>
	      		<li><a href="#"><?php echo $_SESSION['valid_user'];?></a></li>
	      		<li><a href="./register/logout.php">登出</a></li>
	      		<?php
	      	}
	      	else{
	      		?>
	      		<li><a href="javascript:openLogin();">登录/注册</a></li>
	      		<?php
	      	}
	      	?>
	        
	      </ul>
	  </nav>
	</div>
</div>

<!--******************************course_show********************************************-->
<?php
		$course_id=$_GET["courseid"];
		$user_id = $_SESSION['userid'];
	include_once("./conn/config.php");
	$DB= new ConnDB(dbtype,host,user,pwd,dbname);
	$conn=$DB->GetConnId();
	$admindb=new AdminDB();
	$sql="select * from ".tb_table_course." where m_courseid=$course_id";
	$rs=$conn->query($sql);
	$rs_array=array();
	if($rs){
		$rs_array=mysqli_fetch_array($rs);
	}
	$teacher_name=$rs_array['m_teacher'];
	$teacher_array=array();
	$sql_teacher="select * from ".tb_table_teacher." where m_teacher like '$teacher_name%'";
	$rs_teacher=$conn->query($sql_teacher);
	if($rs_teacher){
		$teacher_array=mysqli_fetch_array($rs_teacher);
	}
	$sql2="select * from ".tb_table_chapter." where m_courseid=$course_id order by m_chapterindex asc";
	$rs2=$conn->query($sql2);
	$rs2_array=array();
	$chapterid=array();
	$chapterindex=array();
	$chapter=array();
	$chapterimage=array();
	$chapterchaining=array();
	$chapternumconcern=array();		
	if($rs2){
		while($rs2_array=mysqli_fetch_array($rs2)){
			$chapterid[]=$rs2_array['m_chapterid'];
			$chapterindex[]=$rs2_array['m_chapterindex'];
			$chapter[]=$rs2_array['m_chapter'];
			$chapterimage[]=$rs2_array['m_image'];
			$chapterchaining[]=$rs2_array['m_chaining'];
			$chapternumconcern[]=$rs2_array['m_numconcern'];
		}
	}
?>
<script>
    function g_warning(){
        alert('请先登录');
        return false;
    }
</script>

<div class="course_info">
	<div class="container">
	<div class="row info">
	<div class="col-sm-4 col-md-4 col-lg-4 text-center">
	<img src="<?php echo $rs_array['m_image'];?>"/>
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6 text-center">
		<h1><?php echo $rs_array['m_course'];?></h1>
		<h4><?php echo "类型：".$rs_array['m_type']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
			"开课时间：".$rs_array['m_time']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
			"关注人数：".$rs_array['m_numconcern'];?></h2>
		<p><?php echo "内容介绍：".$rs_array['m_content'];?></p>
		<!--加入关注和取消关注按钮-->
		 <form action="<?php echo "./course.php?courseid=$course_id";?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php
   if(isset($user_id)){
    include_once("./forum_course/db_fns.php");
    $conn = db_connect();
	 $query = "select * from t_userconcern where m_courseid=$course_id and m_userid=$user_id";
	 $result_all = $conn->query($query);
	 if (!$result_all) {
     return false;
  }
  if($result_all->num_rows>0){	
?>
    <input type="submit" class="btn-primary" name="like_1" value="取消关注" id="like"/>
<?php
	  }
    else{
?>
    <input type="submit" class="btn-primary" name="like_1" value="关注" id="like"/>
<?php
    }
   }
   else{
?>
    <input type="submit" class="btn-primary" name="like" value="关注" id="like" onclick="return g_warning();"/>

<?php
    }
?>
	</form>	
	</div>
	</div>
	</div>
</div>
<?php
	if(($_POST["like_1"]=="关注")&&($result_all->num_rows==0)){
		$numcon_course = $rs_array['m_numconcern'];
	  $conn = db_connect();
	  $query = "insert into t_userconcern (m_concernid, m_userid, m_courseid) values (null,'".$user_id."','".$course_id."')";
		  $result = $conn->query($query);
      if (!$result) {
        return false;
      }
      $numcon_course = $numcon_course+1;
      $query = "update t_course set m_numconcern=$numcon_course where m_courseid='".$course_id."'";
      $result = $conn->query($query);
      if (!$result) {
         return false;
      }
      echo "<script language=JavaScript> location.replace(location.href);</script>";
	}
	if(($_POST["like_1"]=="取消关注")&&($result_all->num_rows>0)){
		 $numcon_course = $rs_array['m_numconcern'];
	   $conn = db_connect();
     $query = "delete from t_userconcern where m_courseid=$course_id and m_userid=$user_id";
		  $result = $conn->query($query);
      if (!$result) {
        return false;
      }
      $numcon_course = $numcon_course-1;
      if($numcon_course>=0){
      $query = "update t_course set m_numconcern=$numcon_course where m_courseid='".$course_id."'";
      $result = $conn->query($query);
      if (!$result) {
         return false;
      }
		}
		echo "<script language=JavaScript> location.replace(location.href);</script>";
	}
?>
<div class="chapter_info">
	<div class="container">
	<div class="row">
	<div class="col-sm-7 col-md-6 p_info col-lg-6 text-left">
        <h2><?php echo "共有课程 ".count($chapterindex)." 节"; ?>
        </h2>
            <form action="download/browsedir.php?courseid=<?php echo $course_id;?>" method="post" name="form_downlod">
        <input type="submit" name="download" value="文件下载">
        </form> 
		<?php 
			for($i=0;$i<count($chapterindex);$i++){
				$id=$chapterid[$i];
		?>
		<div class="row p_inside">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center" onclick="window.location.href='<?php echo "./chapter/chapter.php?chapterid=$id";?>';"
				style="cursor:pointer" onmouseover="this.style.backgroundColor='#B0E0E6'" onmouseout="this.style.backgroundColor=''">
				<h3><?php echo "第".$chapterindex[$i]."节";?></3>
				<p><?php echo $chapter[$i];?></p>
			</div>
		</div>
		<?php
			}
		?>
</div>
	<div class="col-sm-1 col-md-3 col-lg-4 text-center"></div>
	<div class="col-sm-3 col-md-4 col-lg-4 teacher_info text-center">
		<h2><?php echo "授课教师：".$rs_array['m_teacher'];?></h2>
		<p><?php echo "简介：".$teacher_array['m_description'];?></p>
	</div>
</div>
</div>
</div>
<div class="discussion">
	<div class="container">
	<div class="row">
	<div class="col-sm-12 col-md-10 d_col col-lg-10">
		<iframe src="<?php echo "./forum_course/forum.php?courseid=$course_id";?>" width="100%" height="100%" name="in"
					frameborder="0" scrolling="yes"></iframe>
	</div>
	</div>
	</div>
</div>
<div class="footer_bg">
	<div class="container">
		<div class="row footer">
			<div class="copy text-center">
				<p class="link"><span style="font-size:20px;">&#169; 版权所有 | 设计者 &nbsp;haojilao130</span></p>
			</div>
		</div>
	</div>
</div>

</body>
</html>
