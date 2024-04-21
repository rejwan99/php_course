<?php 
session_start();
include("connection.php");
$sql="SELECT * FROM multiuser_table WHERE user='client'";
$data= mysqli_query($conn,$sql);
?>
<h3>Welecome Admin</h3>
<table border="1" cellpadding="0">
	<tr>
		<th>Sl.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>User</th>
		<th>Auth</th>
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
		<td><a href="block.php?blk=<?php echo $result['user_id']?>">Block</a>
		<a href="unblock.php?ublk=<?php echo $result['user_id']?>">Unblock</a></td>
	</tr>
<?php  
}
?>	
</table>
