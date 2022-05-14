<html> 
 <head> 
 <title>20BAI1150-JAHNAVI THONDEPU</title> 
 </head> 
 <body> 
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
method="post"> 
 Enter policy number : <input type="text" name="pol"> 
 <input type="submit" value="Search"> 
 </form> 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
$con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"insurance"); 
$sel='select * from cust_policy'; 
$sq=mysqli_query($con,$sel); 
$pol = $_POST["pol"]; 
$cond=0; 
while ($row=mysqli_fetch_array($sq)) 
{ 
 if($pol == $row["policy_no"]){ 
 $cond=1; 
 echo "<br>Your policy details<br>"; 
 echo 'policy_no'." ".'cust_name'." ".'cost'." ".'duration'.'<br>'; 
echo $row['policy_no']." ". $row['cust_name']." ". $row['cost']."
".$row['duration'].'<br>'; 
 } 
} 
if($cond==0) echo "Policy doesnt Exist"; 
} 
?>
 </body> 
</html>