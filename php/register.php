<?php
	require 'dbconfig.php';
	//$teamid=$_POST['teamid'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$reg1=$_POST['reg1'];
	$reg2=$_POST['reg2'];
	$mobile1=$_POST['mobile1'];
	$mobile2=$_POST['mobile2'];
	$college=$_POST['college'];
	//$password=$_POST['accesskey'];
	
	$q1="insert into users (p1,p2,reg1,reg2,mobile1,mobile2,college) values ('$p1','$p2','reg1','$reg2','$mobile1','$mobile2','$college')";
	

	if($res=mysqli_query($connection,$q1)){
		$lastid=mysqli_insert_id($connection);
		session_start();
		//$_SESSION['teamid']=$lastid+1;
		$l=$lastid+1;
		$q1="update users set teamid='$l' where id='$lastid' ";
		mysqli_query($connection,$q1);
		echo $l;
	}
	else
	{
	echo "error";
	echo $connection->error;
	}
	
	
		
?>