<?php
require("header.php");
require("testupload.php");


if ($handle = opendir('uploads/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
           echo '<ul>';
		   echo "<li>$entry<br/></li>";
		    echo '</ul>';
        }
    }
    closedir($handle);
}


require ("footer.php")?>