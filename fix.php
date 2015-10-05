<?php
if($_POST)
{
$host="localhost";
$user="root";
$pass="";
$db="iteam";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysqli_connect($host,$user,$pass,$db);
	
		$query="SELECT * from users where 
		username='$username' and password='$password'";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1)
	{
		echo"correct!";
		session_start();
		$_session['iteam']='true';
		header('location : indeks.php');
	}
else	{
		echo 'Wrong username or password!';
		}
}
?>
<h1>LOGIN</h1>
<form method="POST">
Username : <input type="text" name="username" placeholder="Enter username..."><br/><br/>

Password : <input type="password" name="password" placeholder="Enter password..."><br/><br/>
<input type="submit" name="submit" value="Login!">
 </form>
