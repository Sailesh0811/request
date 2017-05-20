<?php
session_start();
require 'dbconfig.php';
$ans="egg";
$teamid=$_SESSION['teamid'];
$level=$_SESSION['level'];
switch($level){
	case "Z":echo "The princess should now burn her guards and create a pyre, for the eggs to hatch.";echo"Do you want to continue?? (-50 Troops)";break;
	case "A":echo "The princess will command one of her dragons to ram the door and break it down.But, the dragon may die and some of your troops may also get caught in the crash.Do you want to continue?? (-20 Troops, -1 Dragon)";break;
	case "B":echo "The witch may become angry and might kill some of your men.Do you want to continue?? (-30 Troops)";break;
	case "C":echo "The witch can get the ingredients she needs, by sacrificing one of your dragons.Do you want to continue?? (-1 Dragon)";break;
	case "D":echo "Do you want to lay siege on this kingdom?? (-100 Troops)";break;
	
}
?>