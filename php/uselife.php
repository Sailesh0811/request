<?php
require 'dbconfig.php';
session_start();
$level=$_SESSION['level'];
$teamid=$_SESSION['teamid'];
switch($level){
	case "Z":
	$query="select * from users where teamid='$teamid'";
	if($result=mysqli_query($connection,$query)){
	$row=mysqli_fetch_assoc($result);
		$army=$row['army'];
		$dragon=$row['dragon'];
	}
	$army-=50;$army+=200;$dragon+=3;
	$lifeline=$row['lifeline']+1;$_SESSION['life']="A";
	$query="update users set lifeline='$lifeline', army='$army', dragon='3', level='A' where teamid='$teamid'";
	$result=mysqli_query($connection,$query);
	echo json_encode("success");break;
	case "A":
	$query="select * from users where teamid='$teamid'";
	if($result=mysqli_query($connection,$query)){
	$row=mysqli_fetch_assoc($result);
		$army=$row['army'];
		$dragon=$row['dragon'];
	}
	$army-=20;$dragon-=1;
	$lifeline=$row['lifeline']+1;$_SESSION['life']="B";
	$query="update users set lifeline='$lifeline', army='$army',dragon='$dragon', level='B' where teamid='$teamid'";
	$result=mysqli_query($connection,$query);
	echo json_encode("success");break;
	case "B":
	$query="select * from users where teamid='$teamid'";
	if($result=mysqli_query($connection,$query)){
	$row=mysqli_fetch_assoc($result);
		$army=$row['army'];
		$dragon=$row['dragon'];
	}
	$army-=30;
	$lifeline=$row['lifeline']+1;$_SESSION['life']="C";
	$query="update users set lifeline='$lifeline', army='$army', level='C' where teamid='$teamid'";
	$result=mysqli_query($connection,$query);
	echo json_encode("success");break;
	case "C":
	$query="select * from users where teamid='$teamid'";
	if($result=mysqli_query($connection,$query)){
	$row=mysqli_fetch_assoc($result);
		$army=$row['army'];
		$dragon=$row['dragon'];
	}
	$army-=30;$army+=150;$dragon-=1;$_SESSION['life']="D";
	$lifeline=$row['lifeline']+1;
	$query="update users set lifeline='$lifeline', army='$army', level='D',dragon='$dragon' where teamid='$teamid'";
	$result=mysqli_query($connection,$query);
	echo json_encode("success");break;
	case "D":
	$query="select * from users where teamid='$teamid'";
	if($result=mysqli_query($connection,$query)){
	$row=mysqli_fetch_assoc($result);
		$army=$row['army'];
		$dragon=$row['dragon'];
	}
	$army-=50;					$_SESSION['life']="E";
	$lifeline=$row['lifeline']+1;
	$query="update users set lifeline='$lifeline', army='$army', level='E' where teamid='$teamid'";
	$result=mysqli_query($connection,$query);
	echo json_encode("success");break;
	
}
?>