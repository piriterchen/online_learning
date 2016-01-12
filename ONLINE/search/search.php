<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/user_info.dwt" codeOutsideHTMLIsLocked="false" -->
<style> 

#win{ 
  position: absolute;
  top: 150px;
  z-index: 2;
  width:800px;
  max-width: 800px;
  min-width: 600px;
  height: 400px;
  overflow: hidden;
  background: #fff;
  margin: 0 auto;
  border:1px solid;
  left: 0;
  right: 0;
  
  z-index:10000000;} 
/* css注释：为了观察效果设置宽度 边框 高度等样式 */ 
</style> 
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>个人中心</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/style_index.css" rel="stylesheet" type="text/css" media="all" />
<link href="./style/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- start plugins -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="./css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="../js/jquery.cslider.js"></script>
<script type="text/javascript" src="../js/screen.js"></script>
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
	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
</head>


<body style="position: relative;
        float: left;
        width: 100%;">
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
sWidth1 = screen.width;
sWidth2 = document.body.Width;
if(sWidth1 <= sWidth2){
	sWidth = sWidth2;
}
else{
	sWidth = sWidth1;
}
sHeight=document.body.Height;
stop = document.getElementById("win").style.top;
if (sHeight<screen.height){sHeight=screen.height;}
document.getElementById("back").style.width = sWidth + "px";
document.getElementById("back").style.height = sHeight + "px";
document.getElementById("back").style.display = "block";
document.getElementById("back").style.display = "block";
//document.getElementById("back").style.right = document.getElementById("win").offsetLeft + "px";
}
</script>


<?php
OB_START();
session_start();
if($_SESSION['login_error'] == 1){
	?>	
<div id=back style="display:block; POSITION:absolute; left:0%; top:0%; width:100%; height:100%; margin-left:0px; margin-top:0px;background-color:black; text-align:center; opacity:0.6; filter:alpha(opacity=60);z-index:100;"></div>

<div id=win style="display:block;">
<?php		
}
else{
	?>
<div id=back style="display:none; POSITION:absolute; left:0%; top:0%; width:100%; height:100%; margin-left:0px; margin-top:0px;background-color:black; text-align:center; opacity:0.6; filter:alpha(opacity=60);z-index:100;"></div>

<div id=win style="display:none;">
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
	        <td><a href="./register/passwd_forget_display.php" id="button_register"><p style = "font-size:20px;align:center;margin-top:20px;">忘记密码?</p></a></td>
	        <td style = "font-size:20px;text-align:right;margin-top:20px;">
	        <input type="submit" value="登录" class="btn-primary" style="margin-top:20px;"/></td></tr>
	        <?php
	        session_start();
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

<!--查询结果-->
		<div class="searchresult">
			<table>
			<h2> 课程查询结果 </h2>
			<?php
			require("./search/useRMM.php");
			$newstr=usingRMM($_POST['keyword']);
			include_once("./search/mysql_search.php");
			//如果搜索到老师
			if($teachermatch==false){
				if(count($myrow_class[0])==0||$myrow_class==false){
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
						<td id="text" onclick="window.location.href='<?php echo "./course.html?courseid=$course_id";?>';"style="cursor:pointer" 
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
					<p id="pagechange"><?php echo $seppage->ShowPageCourse("课程","种","","a1");?>
			<?php
				}
				?>
			<table>
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
			<p id="pagechange"><?php echo $seppagep->ShowPageChapter("视频","个","","a2");?>
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
			<p id="pagechange"><?php echo $seppage->ShowPageCourse("课程","种","","a1");?>
			<?php			
			}
			?>
		</div>
	</body>
</html>