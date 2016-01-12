<form action="change_passwd.php" method="post">
  <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
  <tr>
  <td>identity:</td>
   	<td><input type = "radio" name = "identity" value="1"checked/> teacher
    <input type = "radio" name = "identity" value="0"/> student</td></tr>
  <tr><td>Old password:</td>
    <td><input type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td>New password:</td>
    <td><input type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td>Repeat new password:</td>
    <td><input type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
  </tr>
  <tr><td colspan="2" align="center">
        <input type="submit" value="Change password"/>
  </td></tr>
</form>