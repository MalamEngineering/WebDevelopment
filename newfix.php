<?php
if($_POST)
{
$host="localhost";
$user="root";
$pass="";
$db="iteam";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysql_connect($host,$user,$pass,$db);
	if(!empty($username)&&!empty($password)){
		
		$query="SELECT 'id' from users WHERE username='$username' 
		&& password='$password'";
		if($query_run=mysql_query($query)){
		$query_num_rows= mysql_num_rows($query_run);
		
		if(query_num_rows == 0)	{
		echo 'Wrong username or password!';
		}
				
	else{
		echo 'You must submit a username and password.';
	}
		
}		 
?>
			
		










<h1>LOGIN</h1>
<form method="POST">
Username : <input type="text" name="username" placeholder="Enter username..."><br/><br/>

Password : <input type="password" name="password" placeholder="Enter password..."><br/><br/>
<input type="submit" name="submit" value="Login!">
 </form>