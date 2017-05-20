<?php
session_start();
require 'dbconfig.php';
$teamid=$_POST['teamid'];
$q="select * from users where teamid='$teamid'";
$result=mysqli_query($connection,$q);
if(mysqli_num_rows($result)>0)	{
$query="delete from users where teamid='$teamid' ";
mysqli_query($connection,$query);	
echo json_encode("success");
}
else{
	echo json_encode("error");
}
?>