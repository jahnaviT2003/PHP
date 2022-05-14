<?php 
setcookie( "Jahnavi", "IWP", time()- 3600, "/","", 0); 
?> 
<html> 
<head> <title>20BAI1150-JAHNAVI THONDEPU</title> 
</head> 
<body> 
<?php 
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
 ?> 
</body> 
</html> 