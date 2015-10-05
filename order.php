<?php require("header.php")?>
<h2>Order a product</h2> 

<form action="order.php" method="post">

<table>
<tr> 
<td>Company name</td> 
<td><input type="text" name="company_name"></td> </tr>

<tr> <td>Contact Person</td> 
<td><input type="text" name="contact_person"></td> </tr> 

<tr> 
<td>PHONE</td> 
<td><input type="text" name="phone"></td> </tr>

<tr> <td>Mobile</td> 
<td><input type="text" name="mobile"></td> </tr> 

<tr> <td>Fax</td> 
<td><input type="text" name="fax"></td> </tr> 

<tr> 
<td>product type</td> <td>
 <select name="type"> 
<?php $catsql = "SELECT * FROM product_type;"; 
$catres = mysql_query($catsql); 
while($catrow= mysql_fetch_assoc($catres)) { 
echo "<option value='" . $catrow['id'] . "'>" . 
$catrow['type'] . "</option>"; } ?>
 
</select> </td> </tr>

<tr> <td>Quantity</td> 
<td><input type="text" name="quantity"></td> </tr> 

<tr> 
<td></td> 
<td><input type="submit" name="submit" value="Order!"></td> 
</tr> 
</table> 
</form>
<?php
if(isset($_POST['submit']))
{
$company=$_POST['company_name'];

$contact=$_POST['contact_person'];

$phone=$_POST['phone'];

$mobile=$_POST['mobile'];

$fax= $_POST['fax'];

$type = $_POST['type'];

$quantity= $_POST ['quantity'];



$query="INSERT INTO `order` (`company_name` , `date`,`contact_person`, `phone`, `mobile`, `fax`, `type_id`, `quantity`) values 
('{$company}' , NOW() , '{$contact}' , '{$phone}' , '{$mobile}' , '{$fax}' , '{$type}','{$quantity}') ;";
$result= mysql_query($query);

	if(!$result){
		die("It's not ordered".mysql_error());
}
	else {
		echo"It's ordered";
	}
}
?>
<?php require ("footer.php")?>