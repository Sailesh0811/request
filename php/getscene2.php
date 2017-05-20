<?php
session_start();
require 'dbconfig.php';
$ans="theredwoman";
$teamid=$_SESSION['teamid'];
$response=$_POST['response'];
if($ans==$response){
	$_SESSION['level']='C';
$query="update users set level='C' where teamid='$teamid'";
$result=mysqli_query($connection,$query);
echo json_encode("success");
}
else{
	echo json_encode("error");
}
?>