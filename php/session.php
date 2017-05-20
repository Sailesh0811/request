<?php
session_start();
require 'dbconfig.php';

$q="select * from admin";
$result=mysqli_query($connection,$q);
$row=mysqli_fetch_assoc($result);
if($row['session']=="ON"){
	$q="update admin set session='OFF'";
$result=mysqli_query($connection,$q);
}
if($row['session']=="OFF"){
	$q="update admin set session='ON'";
$result=mysqli_query($connection,$q);
}
//mysqli_query($connection,$query);	
echo json_encode("success");

?>