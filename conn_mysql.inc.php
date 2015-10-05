<?php 
function dbConnect() { 
$conn = mysql_connect('localhost','root', '') 
or die ('Cannot connect to MySQL server'); 
mysql_select_db('iteam') 
or die ('Cannot open database'); 
return $conn; 
} 
?>