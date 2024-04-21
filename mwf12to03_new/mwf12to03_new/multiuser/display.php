<?php 
include("connection.php");
$sql="SELECT * FROM multiuser_table";
$data= mysqli_query($conn,$sql);
?>

<table border="1" cellpadding="0">
	<tr>
		<th>Sl.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>User</th>
	</tr>
<?php 
$i=1;
while($result=mysqli_fetch_assoc($data))
{
?>
	<tr>
		<td><?php echo $i=1;$i++;?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td><?php echo $result["user"]?></td>
		

	</tr>
<?php  
}
?>	
</table>
