<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
$sql= "SELECT * FROM `multiimage_table1` WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
?>
<table border="1">
	<tr>
		<th>Sl.no.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Image</th>
	</tr>
<?php 
$i=1;
while($result=mysqli_fetch_assoc($data))
{
?>
	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td>
			<img src="<?php echo $result['picsource']?>" height="100" width="100">
			
		</td>
	</tr>
<?php
}
?>	
</table>
