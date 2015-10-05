<?php
$host="localhost";
$user="root";
$pass="1234";
$db="iteam";

if(!mysql_connect($host,$user,$pass)|| !mysql_select_db($db)){
	die(mysql_error());
		}
?>
