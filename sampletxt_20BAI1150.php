<html>
<head>
<title>
20BAI1150-JAHNAVI THONDEPU
</title>
</head>
<body>
<?php
$myfile = fopen('sample.txt','r+'); 
if (file_exists("sample.txt")){ 
$word =$line=$para=0; 
while (! feof($myfile)) { 
 $s = fgets($myfile,1048576); 
 $line++; 
 if (("\n" == $s) || ("\r\n" == $s)) { 
 $para++; 
 } 
 if(preg_match_all("/\bthe\s+/i", $s, $matches)) { 
 $word +=(sizeof($matches[0])); 
 } 
 echo $s; 
} 
echo "<br><br>Number of lines : ".$line."<br>Number of paragraphs : 
".$para."<br>Number of \"the\" :".$word; 
fputs($myfile,"Hello! How are you?" ); 
fclose($myfile); 
echo "<br><br>After adding the line"; 
$myfile = fopen("sample.txt", "r") or die("Unable to open file!"); 
echo fread($myfile,filesize("sample.txt")); 
fclose($myfile); 
} 
else
echo 'filedoes not exist'; 
?>
</body>
</html>