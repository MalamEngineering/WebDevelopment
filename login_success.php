<?php
require('header.php');
require_once('core.php');
if(!array_key_exists('USERNAME', $_SESSION) && !array_key_exists('USERID', $_SESSION)){
	print_r($_SESSION);
	die("trying to redirect to index.php becuase the session variables are not set");
header("location:index.php");
}
else {}
?>

<html>
<body>
<h2><a href="LOGOUT.PHP">LOG OUT</a></h2>

<div id = "bar">
	<table>
		<tr>
			<th><a href = "upload.php">Upload an Image</a></th>
		</tr>		
		<tr>
		<th><a href = "upload2.php">Upload a magazine</a></th>
		</tr>		
	</table>
</div>
</body>
</html>