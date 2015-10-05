<head>
<link rel="stylesheet" href="css/stylesheet.css"
 type="text/css" /> 
</head>
<?php 
include('includes/title.inc.php'); 
// include MySQL connector function 
if (! @include('includes/conn_mysql.inc.php')) {
	echo 'Sorry, database unavailable'; 
exit; 
	}
// create a connection to MySQL 
$conn = dbConnect('iteam'); 
// prepare SQL to retrieve image details 
$sql = 'SELECT * FROM images';
// submit the query 
$result = mysql_query($sql) or die(mysql_error()); 
// extract the first record as an array 
$row = mysql_fetch_assoc($result);
// get the name and caption for the main image 
$mainImage = $row['filename'];
$caption = $row['caption']; 

if (isset($_GET['image'])) { 
$mainImage = $_GET['image']; 
$caption = $row['caption'];
} else { 
$mainImage = $row['filename']; 
}
// get the dimensions of the main image 
//$imageSize = getimagesize('images/'.$mainImage);
?>

<br/><hr>
<p> Displaying iteam pictures!</p> 
<div id="gallery"> <table id="thumbs">
 <tr> 
 <!-- This row needs to be repeated --> 
 <?php 
 echo '<a href = "media_center_gallery.php">Magazine gallery</a>';
 do { ?>
 
 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?image=<?php echo
 $row['filename']; ?>">
 <img src="images/thumbs/<?php echo $row['filename']; ?>"
 alt="<?php echo $row['caption']?>" width="80" height="54" />
 </a>
 </td> 
 <?php 
 $row = mysql_fetch_assoc($result); 
 } 
 while ($row); 
 ?>
 </tr> 
 <!-- Navigation link needs to go here -->
 </table> <div id="main_image"> 
 <p><img src="images/<?php echo $mainImage; ?>" 
 alt="<?php echo 'Iteam international PLC'; ?>" 
 width="630" height="480" /> </p> 
 <p><?php echo 'Iteam'; ?></p> 
 </div> 
 </div> 
