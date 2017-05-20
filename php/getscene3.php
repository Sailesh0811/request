<?php
session_start();
require 'dbconfig.php';
$ans="dragonglass";
$teamid=$_SESSION['teamid'];
$response=$_POST['response'];
if($ans==$response){
  $_SESSION['level']='D';
$query="update users set level='D' where teamid='$teamid'";
$result=mysqli_query($connection,$query);
echo json_encode("success");
}
else{
  echo json_encode("error");
}
?>