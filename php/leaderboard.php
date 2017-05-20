<?php
require 'dbconfig.php';
session_start();
$q="select * from users";
$result=mysqli_query($connection,$q);$res= array();
$row=mysqli_fetch_assoc($result);
for($i=0;$i<=mysqli_num_rows($result);$i++){

	$res[$i][0]=$i+1;
	$res[$i][1]=$row['p1'];
	$res[$i][2]=$row['army'];
	$row=mysqli_fetch_assoc($result);
}
echo json_encode($res);
?>