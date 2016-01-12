<!DOCHTML html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style text="text/css">
@media (min-width:1700px){
.modify{
   width:100%;
   font-family:'微软雅黑';
   font-size:20px;
}
#form1{
   padding-top:120px;
   font-size:20px;
}
#form1 input[type="password"]{
  font-family: '微软雅黑';
  color: #575757;
  width:280px;
  font-size: 20px;
  background: #FFFFFF;
}
}
@media (max-width:1699px){
.modify{
   width:100%;
   font-family:'微软雅黑';
   font-size:18px;
}
#form1{
   padding-top:100px;
   font-size:18px;
}
#form1 input[type="password"]{
  font-family: '微软雅黑';
  color: #575757;
  font-size: 18px;
  width:250px;
  background: #FFFFFF;
}
}
@media (max-width:937px){
.modify{
   width:600px;
   font-family:'微软雅黑';
   font-size:16px;
}
#form1{
   padding-top:80px;
   font-size:16px;
}
#form1 input[type="password"]{
  font-family: '微软雅黑';
  color: #575757;
  width:200px;
  font-size: 16px;
  background: #FFFFFF;
}
}
</style>
</head>
<body>
<div class="modify">
<form action="./change_passwd.php" method="post" name="form1" id="form1">
  <table align="center" cellpadding="20" cellspacing="10">
  <tr>
  <td><p style = "font-family:'微软雅黑';">身份:</p></td>
    <td style = "font-family:'微软雅黑';"><input type = "radio" name = "identity" value="1"checked/> 老师
    <input type = "radio" name = "identity" value="0"/> 学生</td></tr>
  <tr><td><p style = "margin-bottom:20px;font-family:'微软雅黑';">原密码:</p></td>
    <td><input style = "margin-bottom:20px;font-family:'微软雅黑';" type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td><p style = "margin-bottom:20px;font-family:'微软雅黑';">新密码:</p></td>
    <td><input  style = "margin-bottom:20px;font-family:'微软雅黑';" type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td><p style = "margin-bottom:20px;font-family:'微软雅黑';">重复新密码:</p></td>
    <td><input style = "margin-bottom:20px;font-family:'微软雅黑';" type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td colspan="2" align="center">
        <input style = "margin-bottom:20px;font-family:'微软雅黑';" type="submit" value="更改密码"/>
  </td></tr>
</form>
</div>
</body>
</html>
