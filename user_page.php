<?php
	session_start();
	if($_SESSION['UserID' == " "]
	{
		echo "Please Login";
		exit();
	}
	if ($_SESSION['Status' == "USER"]
	{
		echo "This page for USER";
		exit();
	}
	mysql_connect("localhost","root","1234";
	mysql_select_db("message_board");
	$strSQL = "select * from member where UserID = '".$_session['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>Wellcome to User page </p>
<p><?php echo $objResult["Username"];?></p>
<p><?php echo $objResult["Name"];?></p>
<p><a href="logout.php">Logout</a></p>
<p>&nbsp;</p>
<table width="841" border="1">
  <tbody>
    <tr>
      <td width="83">Username</td>
      <td width="186">Title</td>
      <td width="61">Category</td>
      <td width="85">Time</td>
      <td width="243">Post</td>
      <td width="41">picture</td>
      <td width="96">Link</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>