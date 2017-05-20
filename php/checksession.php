<?php
session_start();
if($_SESSION['teamid'] != ""){
	echo "success";
	
}
else{
	echo "error";
}

?>