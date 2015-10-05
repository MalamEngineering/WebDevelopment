<?php 
require("config.php"); 
require_once('core.php');
$db = mysql_connect($dbhost, $dbuser, $dbpassword);
 mysql_select_db($dbdatabase, $db);

?> 
<!--DOCTYPE HTML PUBLIC "-//W3C//DTD 
HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"--> 
<html> 
<head> 
<title><?php echo $config_blogname; ?></title> 
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" /> 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head> 
<body> 
<div id="header"> 
<h1><?php echo $config_blogname; ?> 
</h1> 
</div>
<div id="menu"><table align = "right"><tr><th>
<a href="login.php">login</a></th></tr> 
</table>
<table align= "center"><tr>
<th><a href="index.php">home</a>     </th>
<th> <a href="about_us.php">about us</a>    </th>
<th><a href="product_and_service.php">Product and Service</a></th>
<th><a href="media_center.php">Media Center</a>    </th>
<th> <a href="order.php">Place an order</a></th>

</tr></table>

<!--a href="magazines.php">Upload Magazines</a-->


</div>

<div id= "main">
<br/><br/>
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="100%" height="450" src="images/1.jpg" alt="&quot;Malam Enginerring PLC&quot;" /></li>
          <li><img width="100%" height="450" src="images/2.jpg" alt="&quot;Malam Enginerring PLC&quot;" /></li>
		  <li><img width="100%" height="450" src="images/3.jpg" alt="&quot;Malam Enginerring PLC&quot;" /></li>
        </ul>
      </div>
