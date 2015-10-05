<?php 
function dbConnect() { 
$conn = mysql_connect('localhost','root', '1234') 
or die ('Cannot connect to MySQL server'); 
mysql_select_db('iteam') 
or die ('Cannot open database'); 
return $conn; 
} 
?>
