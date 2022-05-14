<?php
     
// start a new session 
session_start(); 
        
// Check if the session name exists 
if( isset($_SESSION['name']) ) { 
    echo 'Session name is set.'.'<br>'; 
} 
else { 
    echo 'Please set the session name !'.'<br>'; 
} 
 echo'<br>';
 $_SESSION['name'] = 'John'; 
   
  unset($_SESSION['name']);     
 echo "Session Name : ".'<br>'; 
    
?>