<?php
require ('newfix.php')
session_start();
if(isset($_session['user_id']))
{	
	header ('location:LOGIN.php');
}
?>


HELLO,    <a href="LOGOUT.PHP">LOG OUT</a>