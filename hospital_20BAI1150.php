<html>
<head>
<title>
20BAI1150-JAHNAVI THONDEPU
</title>
<style>
table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
</style>
</head>
<body>
<h2>Database without sorting</h2>
<br>
<table>
<tr>
<th>P-Id</th>
<th>Name</th>
<th>Age</th>
</tr>
<tr>
<td>1</td>
<td>Alen</td>
<td>39</td>
</tr>
<tr>
<td>2</td>
<td>Deena</td>
<td>47</td>
</tr>
<tr>
<td>3</td>
<td>Divya</td>
<td>21</td>
</tr>
<tr>
<td>4</td>
<td>Jack</td>
<td>54</td>
</tr>
<tr>
<td>5</td>
<td>Joe</td>
<td>23</td>
</tr>
<tr>
<td>6</td>
<td>Kelvin</td>
<td>61</td>
</tr>
<tr>
<td>7</td>
<td>Leo</td>
<td>27</td>
</tr>
<tr>
<td>8</td>
<td>Rex</td>
<td>49</td>
</tr>
</table>
<h2>Database After Sorting</h2>
<?php
$arr=
array(
array(1,"Alen",39),
array(2,"Denna",47),
array(3,"Divya",21),
array(4,"Jack",54),
array(5,"Joe",23),
array(6,"Kelvin",61),
array(7,"Leo",27),
array(8,"Rex",49)
);
for ($i = 0; $i < 8; $i++) 
{
for ($j = $i + 1; $j < 8; $j++)
{
if ($arr[$i][2] < $arr[$j][2]) 
{
$a = $arr[$i][2];
$arr[$i][2] = $arr[$j][2];
$arr[$j][2] = $a;
$a = $arr[$i][1];
$arr[$i][1] = $arr[$j][1];
$arr[$j][1] = $a;
$a = $arr[$i][0];
$arr[$i][0] = $arr[$j][0];
$arr[$j][0] = $a;
}
}
}
?>
<table>
<tr>
<th>P-Id</th>
<th>Name</th>
<th>Age</th>
</tr>
<?php
for($i=0;$i<8;$i++){
?>
<tr>
<td><?php echo $arr[$i][0]; ?></td>
<td><?php echo $arr[$i][1]; ?></td>
<td><?php echo $arr[$i][2]; ?></td>
</tr>
<?php
}
?>
</table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Enter the PId :
<input type="number" id="find" name="find">
<input type="submit" value="submit">
</form>
<?php
$ap;
$ap1=$ap2=$ap3=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["find"])) {
$ap ="Not Found";
$ap1="na";
$ap2="na";
$ap3="na";
}
else{
$ap= ($_POST["find"]);
echo($ap);
for($i=0;$i<8;$i++)
{
if($ap==($arr[$i][0]))
{
$ap1=($arr[$i][0]);
$ap2=($arr[$i][1]);
$ap3=($arr[$i][2]);
}
}
}
}
?>
<h3>Status:</h3>
<br>
<?php echo $ap1;?><br>
<?php echo $ap2;?><br>
<?php echo $ap3;?><br>
<br><br>
</body>
</html>
