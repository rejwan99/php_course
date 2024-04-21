<?php 
include("connection.php");
$country= $_REQUEST["countr"];
//echo $country;
//die();
$sql= "SELECT * FROM country WHERE country='$country'"; 
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$total= mysqli_num_rows($data);
?>
<?php 
if($total==0)
{
  
}
else
{
?>
  	City: 
<select>
	<option><?php echo $result['city_1'];?></option>
	<option><?php echo $result['city_2'];?></option>
	<option><?php echo $result['city_3'];?></option>
</select>
  <?php
}
?>	
