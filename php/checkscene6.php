<?php
session_start();
require 'dbconfig.php';
$response=$_POST['response'];
//echo $response;
//$response="0 or 1=1";
$teamid=$_SESSION['teamid'];
$q="select p2 from users where id=$response";
$result=mysqli_query($connection,$q);
if(mysqli_num_rows($result)>0)
{
	$q="update users set level='F' where teamid='$teamid'";
	$_SESSION['level']="F";
	//$_SESSION['session']="OFF";
	echo "true";
}
else{
	echo "false";
}
?>