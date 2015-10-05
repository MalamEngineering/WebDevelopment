 

<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("iteam", $con);

 

$sql="INSERT INTO order (company_name, date, contact_person, 
phone, mobile, fax, quantity, type_id)

VALUES

('$_POST[company_name]', NOW (),'$_POST[contact_person]' , '$_POST[phone]' , '$_POST[mobile]' , '$_POST[fax]' ,'$_POST[quantity]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 