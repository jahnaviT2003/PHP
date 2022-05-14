<!DOCTYPE html>
<?php
$cookie_name = "Jahnavi";
$cookie_value = "IWP";
setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
?>
<html>
<head>
<title>20BAI1150-JAHNAVI THONDEPU</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) 
{
    echo "Cookie named '" . $cookie_name . "' is not set!";
} 
else 
{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>