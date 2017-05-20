<?php
session_start();
require 'dbconfig.php';
$ans="fireandblood";
$teamid=$_SESSION['teamid'];
$response=$_POST['response'];
if($ans==$response){
	$_SESSION['level']='F';
	$_SESSION['session']="OFF";
$query="update users set level='F' where teamid='$teamid'";
$result=mysqli_query($connection,$query);
echo json_encode("success");
}
else{
	echo json_encode("error");
}
?>