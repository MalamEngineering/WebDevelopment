<head>
<link rel="stylesheet" href="css/stylesheet.css"
 type="text/css" /> 
</head>
<p> Displaying iteam Magazines!</p> 
<div id="main_image">
 <!-- This row needs to be repeated --> 
 <?php 
 if ($handle = opendir('magazines/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
           
		   ?>
		   
		   
		   <?php 
		   echo "<ul><li>$entry";
		   ?>"<a href = "<?php fopen($entry , "r" ); ?>">  Open</a>
		   <?php
		   echo "</li></ul>";
        }
    }
    closedir($handle);
 }
?>
</div>