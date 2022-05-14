<?php 

//Create the session.
session_start(); 
echo "Session has been started";

//Session Variable.
$_SESSION["favcricketer"] = "Virat Kohli";
if( isset( $_SESSION['favcricketer'] ) ) { 
echo "Session variable is already set. That is ". $_SESSION["favcricketer"].".<br>"; 
}
else { 
echo("Session Variable is not set.<br>");
} 

//Create the session.
session_start(); 
//Delete the session Variable.
$_SESSION["favcricketer"] = "Virat Kohli";
unset($_SESSION['favcricketer']);
echo "Session variable deleted".".<br>";
?> 
<html>  
<head> 
<title>20BAI1150-JAHNAVI THONDEPU</title> 
</head> 
</html> 