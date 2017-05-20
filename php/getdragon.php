<?php
require 'dbconfig.php';
session_start();
$teamid=$_SESSION['teamid'];
$query="select * from users where teamid='$teamid'";
if($result=mysqli_query($connection,$query)){
$row=mysqli_fetch_assoc($result);

echo $row['dragon'];
}
else{
	echo $connection->error;
}
?>