<?php
if(isset($_POST['username']) &&isset($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = md5($password);
	if(!empty($username) && !empty($password)){
		
		$query="SELECT id from users where username='$username' and password='$password_hash'";
		echo "The query statement is: $query";
		if($query_run = mysql_query($query)){
			
			$query_num_rows = mysql_num_rows($query_run);
			$row = mysql_fetch_assoc($query_run);
			
			if($query_num_rows==0){
				die("Invalid username/password combination.	");
				
			}   else if($query_num_rows==1){
				$_SESSION['USERNAME'] = $row['username'];
				$_SESSION['USERID'] = $row['id'];
				header("location:login_success.php");
				
				//$user_id = mysql_result($query_run, 0, 'id');
				//$_session["var"] = $user_id;
				//$ID = $_session["var"];			
			
			}
		} else {
			echo "The mysql query failed. $query_run";
		}
	} else {
		echo 'You must fill username and password!';
	}
}
 ?>
<h1>LOGIN</h1>
<form action="<?php echo $current_file;?>" method="POST">
	Username : <input type="text" name="username">

	Password : <input type="password" name="password"><br/><br/>
	<input type="submit" name="submit" value="Login!">
</form>
<a href="login_success.php">Click Here</a> if you are logged in.