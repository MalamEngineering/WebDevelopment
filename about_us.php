<?php
require ("header.php");
echo '<br/><br/>';
echo 'Project status follow up!';
if(isset($_POST['cname']) && isset($_POST['type'])) {
		
	$company_name=$_POST['cname'];
	$type=$_POST['type'];
	
	
		$query = "SELECT * FROM `order` WHERE `company_name` LIKE '$company_name' AND `type_id` = '$type' ORDER BY `id` ASC ";
	if($result = mysql_query($query)){
						while($row = mysql_fetch_assoc($result)){
								$date = $row['date'];
								$quantity = $row['quantity'];
								echo '<br/><br/>';
								echo 'It was ordered in the date of : '.$date;
								echo '<br/>Quantity : '.$quantity;
								echo '<br/>';
							}
		} 
			else {
		echo mysql_error();
}}
?><table><tr>
<form action ="about_us.php" method="post"><td>
Company Name : </td><td><input type ="text" name="cname">
</td></tr><tr><td>
Product Type : </td><td><select name="type"> 

<?php $sql = "SELECT * FROM product_type;"; 
$res = mysql_query($sql); 
while($row= mysql_fetch_assoc($res)) { 
echo "<option value='" . $row['id'] . "'>" . 
$row['type'] . "</option>"; } ?>
 
 </select></td><td></td><td>
 <input type = "submit" name="submit" value ="search">
</form>
</table>
<?php
require ("footer.php")

?>