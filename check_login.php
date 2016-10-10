<?php
session_start();
mysql_connect("localhost","root","1234");
mysql_select_db("message_board");
$strSQL = "select * from member where Username = '".mysql_real_escape_string($_post['txtusername'])."' and Password = '".mysql_real_escape_string($post['txtpassword'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
	echo "username and password incorrect";
}else
	$_session["UserID"] = $objResult["UserID"];
	$_session["Status"] = $objResult["Status"];

	session_write_close();

	if($objResult["Status"] == "ADMIN")
	{
		header("location:admin_page.php");
	}else
	{
		header("location:user_page.php");
	}
	
	mysql_close();

?>