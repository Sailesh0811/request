<?php
session_start();
require 'dbconfig.php';
$raise=$_POST['count'];
$teamid=$_SESSION['teamid'];
$session="select * from admin ";
$result=mysqli_query($connection,$session);
$row=mysqli_fetch_assoc($result);
$session=$row['session'];
echo $session;$_SESSION['session']=$session;
if($_SESSION['session']=="ON"){
$q="select * from users where teamid='$teamid'";
$result=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($result);
$army=$raise+$row['army'];
$q="update users set army='$army' where teamid='$teamid'";
$result=mysqli_query($connection,$q);
}
?>