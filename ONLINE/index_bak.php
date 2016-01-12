<!DOCTYPE html>
<html>
<head>
<title>Learn a education</title>
<link href="./css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'/>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="./css/style_index.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="./css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="./js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="./js/jquery.cslider.js"></script>
<script type="text/javascript" src="./js/screen.js"></script>
	<script type="text/javascript">
			$(function(){
				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});
			});
			function hide(id){
				if(document.getElementById(id).innerHTML==="查看更多")
	 			  document.getElementById(id).innerHTML="隐藏更多";
				else
					document.getElementById(id).innerHTML="查看更多";
			}
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
<div id=back style="display:none; POSITION:absolute; left:0%; top:0%; width:100%; height:100%; margin-left:0px; margin-top:0px;background-color:black; text-align:center; opacity:0.6; filter:alpha(opacity=60);z-index:100;"></div>


<?php
OB_START();
if($_SESSION['login_error'] == 1){
	?>	
<div id=win style="display:none; POSITION:absolute; left:50%; top:50%; width:800px; height:400px; margin-left:-400px; margin-top:-270px; border:1px solid #888; background-color:white; text-align:center; opacity:1.0; filter:alpha(opacity=100);z-index:300;">
<?php		
}
else{
	?>
<div id=win style="display:none; POSITION: fixed; left:50%; top:50%; width:800px; height:400px; margin-left:-400px; margin-top:-270px; border:1px solid #888; background-color:white; text-align:center; opacity:1.0; filter:alpha(opacity=100);z-index:10000;">
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
			<h1><a href="index.php">Online 学习 </a></h1>
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
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="./index.php">主页</a></li>
	        <?php
	        	session_start();
	        	if(isset($_SESSION['valid_user'])&&isset($_SESSION['user_identity'])){
	        	?>
	        		<li><a href="technology.html">个人中心</a></li>
	        	<?php
	        	}
	        ?>
	      </ul>
	    </div>
	  </nav>
		<nav class="navbar navbar-default navbar-right" role="navigation">
		  <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
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
	    </div>
	  </nav>
	</div>
</div>
	
	<div class="slider_bg"><!-- start slider -->
		<div class="container">
			<div id="da-slider" class="da-slider text-center">
				<?php
				require("./conn/config.php");
				$DB= new ConnDB(dbtype,host,user,pwd,dbname);
				$conn=$DB->GetConnId();
				$course_famous="select * from ".tb_table_course." order by m_numconcern desc limit 4";
				$courseid_array=array();
				$coursename_array=array();
				$coursecontent_array=array();
				$courseconcern_array=array();
				$courseimage_array=array();
				$courseteacher_array=array();
        $result=$conn->query($course_famous);
				if($result){
        while($row=mysqli_fetch_array($result)){
			      $courseid_array[]=$row['m_courseid'];
						$coursename_array[]=$row['m_course'];
						$coursecontent_array[]=$row['m_content'];
						$courseconcern_array[]=$row['m_numconcern'];
						$courseimage_array[]=$row['m_image'];
						$courseteacher_array[]=$row['m_teacher'];	      
					}
				}
				for($count=0; $count<count($courseid_array); $count++){
					$id=$courseid_array[$count];
				?>
				<div class="da-slide">
					<h2 style="color:white;"><?php echo $coursename_array[$count];?></h2>
					<p><span class="hide_text"><?php echo $coursecontent_array[$count]; ?></span></p>
					<h3 class="da-link"><a href="<?php echo "./course.php?courseid=$id";?>" class="fa-btn btn-1 btn-1e">更多</a></h3>
				</div>
				<?php
				}
				?>
		   </div>
		</div>
	</div>
</div>

<div class="main_new">
	<div class="container">
	<h2> <strong>最新课程</strong></h2>
	<div class="main row">
	<?php
	$course_new="select * from ".tb_table_course." order by m_time desc limit 3"; 
	$courseid=array();
	$coursename=array();
	$coursecontent=array();
	$courseconcern=array();
	$courseimage=array();
	$courseteacher=array();
  $result=$conn->query($course_new);
	if($result){
		while($row=mysqli_fetch_array($result)){
      $courseid[]=$row['m_courseid'];
			$coursename[]=$row['m_course'];
			$coursecontent[]=$row['m_content'];
			$courseconcern[]=$row['m_numconcern'];
			$courseimage[]=$row['m_image'];
			$courseteacher[]=$row['m_teacher'];	      
		}
	}
	for($count=0; $count<count($courseid); $count++){
		$id1=$courseid[$count];
	?>
		<div class="col-md-4 course_new text-center">
		  <div class="cau_left">
				<img class="lazyOwl" src="<?php echo $courseimage[$count];?>" alt="Lazy Owl Image">
			</div>
			<h4><a href="<?php echo "./course.php?courseid=$id1";?>"><?php echo $coursename[$count];?></a></h4>
			<p class="para"><?php echo $coursecontent[$count];?></p>
			<a href="<?php echo "./course.php?courseid=$id1";?>" class="fa-btn btn-1 btn-1e"> 进入课程</a>
		</div>
	<?php
	}
	?>
	</div>
<!-- ********************************************************工程技术**************************************************-->
	<div class="main_bg_first row">
		<div class="col-md-4 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>工程技术</h2>
    </div>
  <?php
  $keyword="工程技术";
  include_once("./course_show/course_type1.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){	
	  	$id2=$courseid[$count];
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id2";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id2=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id2";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide1" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id2=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id2";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide1">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button1" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
<!-- ********************************************************农林医药**************************************************-->
	<div class="main_bg row">
		<div class="col-md-2 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>农林医药</h2>
    </div>
  <?php
  $keyword="农林医药";
  include_once("./course_show/course_type2.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){	
	  	$id3=$courseid[$count];
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id3";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id3=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id3";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide2" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id3=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id3";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide2">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button2" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
	
<!-- ************************************************************基础科学**********************************************-->
	<div class="main_bg row">
		<div class="col-md-2 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>基础科学</h2>
    </div>
  <?php
  $keyword="基础科学";
  include_once("./course_show/course_type3.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){	
	  	$id4=$courseid[$count];
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id4";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id4=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id4";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide3" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id4=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id4";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide3">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button3" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
<!-- ********************************************************文学艺术**************************************************-->
	<div class="main_bg row">
		<div class="col-md-2 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>文学艺术</h2>
    </div>
  <?php
  $keyword="文学艺术";
  include_once("./course_show/course_type4.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){	
	  	$id5=$courseid[$count];
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id5";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id5=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id5";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide4" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id5=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id5";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide4">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button4" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
<!-- ********************************************************经管法学**************************************************-->
	<div class="main_bg row">
		<div class="col-md-2 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>经管法学</h2>
    </div>
  <?php
  $keyword="经管法学";
  include_once("./course_show/course_type5.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){	
	  	$id6=$courseid[$count];
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id6";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id6=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id6";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide5" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id6=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id6";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide5">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button5" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
<!-- ********************************************************哲学历史**************************************************-->
	<div class="main_bg row">
		<div class="col-md-2 course_type col-lg-2 text-center" style="background-color: #BA55D3;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;" >
    <h2>哲学历史</h2>
    </div>
  <?php
  $keyword="哲学历史";
  include_once("./course_show/course_type6.php");
  if(count($courseid) <= 4){
	  for($count=0; $count < count($courseid); $count++){
	  	$id7=$courseid[$count];	
	  ?>  
	    <div class="col-md-2 course_type col-lg-2 text-center">
	    	<img src="<?php echo $courseimage[$count];?>" />
	    	<h4><a href="<?php echo "./course.php?courseid=$id7";?>"><?php echo $coursename[$count];?></a></h4>
	    </div>
	  <?php
	  }
	}
  else{
  	for($count=0; $count <= 4 ; $count++){
  		$id7=$courseid[$count];
  ?>
		<div class="col-md-2 course_type col-lg-2 text-center">
			<img src="<?php echo $courseimage[$count];?>" />
			<h4><a href="<?php echo "./course.php?courseid=$id7";?>"><?php echo $coursename[$count];?></a></h4>
		</div>
  <?php
		}
	?>
	</div>
	<div class="panel-group" id="accordion">
		<div id="course_hide6" class="panel-collapse collapse">
			<div class="panel-body">
	<?php
		$rows_hide=(count($courseid)-5)/6;
		for($count_row=0; $count_row <= $rows_hide ; $count_row++){
		  $count_remain=count($courseid)-5-$count_row*6;
		  if($count_remain >= 6) $count_remain=5;
			for($count=0; $count <= $count_remain-1;$count++){
				$id7=$courseid[$count];
	?>
	<div class="col-md-2 course_type col-lg-2 text-center">
		<img src="<?php $number=$count+5+$count_row*6;echo $courseimage[$number];?>" />
		<h4><a href="<?php echo "./course.php?courseid=$id7";?>"><?php echo $coursename[$number];?></a></h4>
	</div>
	<?php
			}
		}
	?>
			</div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		  	<div class="main_collapse row">
		     <h4 class="panel-title text-center">
		        <a data-toggle="collapse" data-parent="#accordion" href="#course_hide6">
						<table class="table">
							<thead>
							<tr><td width="45%"></td><td width="10%" rowspan="2">
							<button type="button" class="btn btn-default" id="hide_button6" onclick="hide(this.id)">查看更多</button>
							</td>
							<td width="45%"></td></tr>
							<tr><td></td><td></td></tr></thead>
						</table>
						</a>
		     </h4>
		  	</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>    
	</div>
</div>
<!-- start footer -->
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
