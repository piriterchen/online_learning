<!DOCTYPE html>
<html>
<head>
<title> search result</title>
<link href="./css/style.css" rel="stylesheet">
<link href="./css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
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
			<form action="./search.php" id="form1_search" name="form1_search" method="POST">
				<input type="text" name="keyword" id="keyword" class="text" value="请输入关键字" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入关键字';}">
				<input type="submit" value="搜索" onclick="return check(form1_search);">
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


<!--查询结果-->
		<div class="searchresult">
			<table>
			<h2> 课程查询结果 </h2>
			<?php
			require("./search/useRMM.php");
			if(isset($_POST['keyword'])){
				$keyword=$_POST['keyword'];
			}
			else{
				$keyword=$_GET['key'];
			}
			$newstr=usingRMM($keyword);
			include_once("./search/mysql_search.php");
			//如果搜索到老师
			if($teachermatch==false){
				if(count($myrow_class[0])==0||$myrow_class==false||$newstr==false){
					//显示暂无查询结果
			?>
				<tr>
					<td id="text">
						<p id="no_result">暂无查询结果</p>
					</td>
				</tr>
			</table>
			<?php
				}
				else{
					//显示课程搜索结果
					for($i=0;$i<count($myrow_class[0]);$i++){
						$course_id=$myrow_class[6][$i];
			?>
					<tr>
						<td id="image">
							<img src="<?php echo $myrow_class[3][$i];?>"/>
						</td>
						<td id="text" onclick="window.location.href='<?php echo "./course.php?courseid=$course_id";?>';"style="cursor:pointer" 
							onmouseover="this.style.backgroundColor='#B0E0E6'" onmouseout="this.style.backgroundColor=''">
							<p id="course_name"><?php echo $myrow_class[0][$i];?></p>
							<p id="course_concern"><?php echo "关注人数：".$myrow_class[4][$i]."&nbsp;&nbsp;类型：".$myrow_class[1][$i];?></p>
							<p id="course_content"><?php echo "内容简介：".$unhtml->chinesesubstr($myrow_class[2][$i],'0','100')."..."; ?></p>
						</td>
					</tr>
			<?php
					}
			?>
			</table>
					<p id="pagechange"><?php echo $seppage->ShowPageCourse("课程","种","","a1",$keyword);?>
			<?php
				}
				?>
			<table style="padding-bottom:50px">
				<h2> 视频查询结果 </h2>
			<?php
				if($myrow_chapter[0]==0||$myrow_chapter==false){
			?>				
				<tr>
					<td id="text">
						<p id="no_result">暂无查询结果</p>
					</td>
				</tr>
			</table>	
			<?php				
				}
				else{
					for($i=0;$i<count($myrow_chapter[0]);$i++){
			?>
						<!--显示视频的结果-->		
					<tr>
						<td id="image">
							<img <?php echo "src=$myrow_chapter[3][$i]";?>/>
						</td>
						<td id="text" onclick="window.location='<?php echo $myrow_chapter[2][$i];?>';"style="cursor:pointer" 
							onmouseover="this.style.backgroundColor='#B0E0E6'" onmouseout="this.style.backgroundColor=''">
							<p id="course_name"><?php echo $myrow_chapter[0][$i];?></p>
							<p id="course_concern"><?php echo "关注人数：".$myrow_chapter[3][$i];?></p>
							<p id="course_content"><?php echo "链接：".$myrow_chapter[2][$i];?></p>
						</td>
					</tr>							
			<?php
					}
			?>
			</table>
			<p id="pagechange"><?php echo $seppagep->ShowPageChapter("视频","个","","a2",$keyword);?>
			<?php		
				}
			}
			else{
				for($i=0;$i<count($myrow_class[0]);$i++){
			?>
				<tr>
					<td id="image">
						<img <?php echo "src=$myrow_class[3][$i]";?>/>
					</td>
					<td id="text" onclick="window.location='<?php echo $myrow_class[6][$i];?>';"style="cursor:pointer" 
						onmouseover="this.style.backgroundColor='#B0E0E6'" onmouseout="this.style.backgroundColor=''">
						<p id="course_name"><?php echo $myrow_class[0][$i];?></p>
						<p id="course_concern"><?php echo "关注人数：".$myrow_class[4][$i]."&nbsp;&nbsp;任课教师：".$myrow_class[5][$i];?></p>
						<p id="course_content"><?php echo "内容简介：".$umhtml->chinesesubstr($myrow_class[2][$i],'0','100')."..."; ?></p>
					</td>
				</tr>
			<?php	
				}
			?>
			</table>
			<p id="pagechange"><?php echo $seppage->ShowPageCourse("课程","种","","a1",$keyword);?>
			<?php			
			}
			?>
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
