<?php
session_start();
require 'dbconfig.php';
$army="";$dragon="";
$reducedragon=$_POST['dragon'];
$reducedarmy=$_POST['army'];
$teamid=$_SESSION['teamid'];
$query="select * from users where teamid='$teamid'";
if($result=mysqli_query($connection,$query)){
$row=mysqli_fetch_assoc($result);
	$army=$row['army'];
	$dragon=$row['dragon'];
}

$query="update users set lifeline='1',dragon='3',army='200' where teamid='$teamid'";
$result=mysqli_query($connection,$query);
echo json_encode("success");

?>