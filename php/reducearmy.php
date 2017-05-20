<?php
session_start();
require 'dbconfig.php';
$raise=$_POST['count'];
$teamid=$_SESSION['teamid'];
$session="select * from admin ";
$result=mysqli_query($connection,$session);
$row=mysqli_fetch_assoc($result);
$session=$row['session'];
$s=$_SESSION['session'];//echo $session;echo $s;
if($session==="ON" && $s==="ON"){
$q="select * from users where teamid='$teamid'";
$result=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($result);
$army=$row['army'];
if($army !=0){
	$army=$row['army']-$raise;

$q="update users set army='$army' where teamid='$teamid'";
$result=mysqli_query($connection,$q);
echo "success";
}
else{
	echo "error";
}
}
?>