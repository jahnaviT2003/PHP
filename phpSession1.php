<?php
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