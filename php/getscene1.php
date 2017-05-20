<?php
session_start();
require 'dbconfig.php';
$ans="stanis";
$teamid=$_SESSION['teamid'];
$response=$_POST['response'];
if($ans==$response){
	$_SESSION['level']='B';
$query="update users set level='B' where teamid='$teamid'";
$result=mysqli_query($connection,$query);
echo json_encode("success");
}
else{
	echo json_encode("error");
}
?>