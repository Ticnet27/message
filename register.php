<?php 
mysql_connect('localhost','root','1234');
mysql_select_db('message_board');

if(trim($_post['txtusername']) == ' ')
{
	echo " input Username!!";
	exit();
}
if(trim($_post['txtpassword']) == ' ')
{
	echo " input Password!!";
	exit();
}
if($_post['txtconpassword'] == ' ')
{
	echo " input ConfirmPassword!!";
	exit();
}
if(trim($_post['txtname']) == ' ')
{
	echo " input name!!";
	exit();
}

$strSQL = "select * from member where Username = '".trim($_post['txtusername'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult)
{
	echo 'username already';
}else
{
	$strSQL = "insert into message_board. member ('Username','Password','Name','Status') values ('".$_post["txtusername"]."',
	'".$_post["txtpassword"]."',
	'".$_post["txtname"]."',
	'".$_post["status"]."')";
	$objQuery = mysql_query($strSQL);
	//$objResult=mysql_query($objQuery) or die(mysql_error());

	echo "register completed <br>";
	echo "<a href = 'login.php'> LOGIN </a>";
}
mysql_close();
?>