<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>Register form</p>
<form name="form1" method="post" action="register.php">
<table width="311" border="1">
  <tbody>
    <tr>
      <td width="119"><p>Username</p></td>
        <td> <input type="text" name="txtusername" id="textfield">
      </td>
    </tr>
    <tr>
      <td>Password</td>
      	<td><input type="text" name="txtpassword" id="textfield2"><br>
		</td>
    </tr>
    <tr>
      <td>ConfirmPassword</td>
      <td><input type="text" name="txtconpassword" id="textfield3">
      </td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="txtname" id="textfield4"><br>
		</td>
    </tr>
    <tr>
      <td>Status</td>
      <td><select name="status" id="select">
        <option value="ADMIN">ADMIN</option>
        <option value="USER">USER</option>
    </select></td>
    </tr>
  </tbody>
</table>
<p>
  <input type="submit" name="submit" value="Submit">
</p>
<p>&nbsp;</p>
</form>
</body>
</html>