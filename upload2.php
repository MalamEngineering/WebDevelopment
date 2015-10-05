<?php
// connect to MySQL 
 include('conn_mysql.inc.php'); 
// prepare the SQL query 
 $conn = dbConnect('iteam');
require('header.php');
require_once('core.php');
if(!array_key_exists('USERNAME', $_SESSION) && !array_key_exists('USERID', $_SESSION)){
header("location:index.php");
}
?>
<?php
// define a constant for the maximum upload size 
define ('MAX_FILE_SIZE', 99931200);
if (array_key_exists('upload', $_POST)) { 
// define constant for upload folder 
define('UPLOAD_DIR', 'magazines/'); 
define('UPLOAD_DIR2', 'magazines/thumbs'); 
$file = str_replace(' ', '_', $_FILES['image']['name']);
// convert the maximum size to KB 
$max = number_format(MAX_FILE_SIZE/1024, 1).'KB'; 
// create an array of permitted MIME types 
$permitted = array('application/pdf'); 
// begin by assuming the file is unacceptable 
$sizeOK = false; 
$typeOK = false;
	// check that file is of a permitted MIME type 
	foreach ($permitted as $type) {
	  if ($type == $_FILES['image']['type']) { 
		$typeOK = true; 
		break;
		} 
	}

// check that file is within the permitted size 
if ($_FILES['image']['size'] > 0 && $_FILES['image']['size'] <= 
	MAX_FILE_SIZE) { 
	$sizeOK = true; 
	}
	if ($sizeOK && $typeOK) { 
	switch($_FILES['image']['error']) { 
	case 0: 
	// move the file to the upload folder and rename it 
	$success = move_uploaded_file($_FILES['image']['tmp_name'], UPLOAD_DIR.$file); 
	copy(UPLOAD_DIR.$file,UPLOAD_DIR2.$file);
	if ($success) { 
	$result = "$file uploaded successfully"; 
	//echo '<h2>Copy the file name for the next form and  <a href="upload2.php">Click Here</a> to finish uploading!</h2>';
	} 
	else { 
	$result = "Error uploading $file. Please try again."; 
	} 
	break; 
	case 3: 
	$result = "Error uploading $file. Please try again."; 
	default: 
	$result = "System error uploading $file. Contact webmaster."; 
	} 
	} elseif ($_FILES['image']['error'] == 4) { 
	$result = 'No file selected'; 
	}
	else { 
	$result = "$file cannot be uploaded. Maximum size: $max. Acceptable file type only pdf."; 
	
	}
	}
	?>

	
	
	
<body>
<?php
if(isset($result)){
	echo "<p><i>$result</i></p>";
}
?>
<form action="" method="post" enctype="multipart/form-data" 
 name="uploadImage" id="uploadImage"> 
 <p> <label for="image">Upload A Magazine:</label>
 <input type="hidden" name="MAX_FILE_SIZE" 
 value="<?php echo MAX_FILE_SIZE; ?>" />
 <input type="file" name="image" id="image"/> 
 </p> <p> 
 <input type="submit" name="upload" id="upload" value="Upload" /><br/>
 <i><a href = "login_success.php" >Click here</a></i> to return to the main page.
 </p> </form>
 <?php 

 if (array_key_exists('upload', $_POST)) 
 { 
 echo $file;
 $query2="INSERT INTO `magazines`(`filename`) VALUES ('$file');";
 $result= mysql_query($query2);

	if(!$result){
		die("not!".mysql_error());
}

 } ?> 
</body>