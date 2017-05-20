<?php
	require 'dbconfig.php';
	$teamid=$_POST['teamid'];
	
	$password=$_POST['password'];
	$q="Select password from admin where password='$password'";
	//$q1="insert into users (teamid,p1,p2) values ('$teamid','$p1','$p2')";
	if($res=mysqli_query($connection,$q)){
if(mysqli_num_rows($res)==1){
		session_start();
		$_SESSION['teamid']=$teamid;
		echo json_encode("success");
	}
	else
	{
	echo "error";
	}
	
	}
else{
	echo $connection->error;
}
	
?>		