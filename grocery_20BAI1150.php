<html>
<head>
<title>
20BAI1150-JAHNAVI THONDEPU
</title>
<style>
background {
background-color: #72e653;
color: green;
}
h1 {text-align: center;}
</style>
</head>
<body style="background-color:greenyellow">
<?php
$apple=$banana=$avacado=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["apple_quantity"])) {
$apple =0;
}
else{$apple= ($_POST["apple_quantity"]);}
if(empty($_POST["banana_quantity"])){
$banana=0;
}
else{$banana=($_POST["banana_quantity"]);}
if(empty($_POST["avacado_quantity"])){
$avacado=0;
}
else{
$avacado=($_POST["avacado_quantity"]);
}
$cost=0;
$cost=$apple*10+$banana*5+$avacado*7;
//echo $apple;
}
?>
<h1>Grocery Order Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td>Customer Name:</td>
</tr>
<tr>
<td>
<input type="text" name="firstname" id="fname">&nbsp; &nbsp;
</td>
<td>
<input type="text" name="lastname" id="lname">
</td>
</tr>
<tr>
<td>
Phone Number:
</td>
</tr>
<tr>
<td>
<input type="number" name="country_code" id="ccode">&nbsp; &nbsp;
</td>
<td>
<input type="number" name="phone_no" id="phno">&nbsp; &nbsp;
</td>
</tr>
<tr>
<td>
Email Id:
</td>
</tr>
<tr>
<td>
<input type="email" name="mail" id="email_id">&nbsp; &nbsp;
</td>
</tr>
</table>
<br>
<br>
Products: 
<table>
<tr>
<td>
<input type="checkbox" name=apple id="appleckb">&nbsp; &nbsp;
Apple&nbsp; &nbsp;
</td>
<td>&#36 10</td>
<td>
<input type="number" name="apple_quantity" id="appleqty">
</td>
</tr>
<tr>
<td>
<input type="checkbox" name=banana id="bananackb">&nbsp; &nbsp;
Banana&nbsp; &nbsp;</td>
<td>&#36 5</td>
<td> <input type="number" name="banana_quantity" id="bananaqty">
</td>
</tr>
<tr>
<td>
<input type="checkbox" name=avacado id="avacadockb">&nbsp; &nbsp;
Avacado&nbsp; &nbsp;
</td>
<td>&#36 7</td>
<td>
<input type="number" name="avacado_quantity" id="avacadoqty">
</td>
</tr>
</table>
<br><br>
<input type="submit" value="submit">
</form>
<h2>Amount to be paid : <?php echo $cost?></h2>
</body>
</html>