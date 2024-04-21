<?php 
include("connection.php");
$sql= "SELECT * FROM user1";
$data= mysqli_query($conn,$sql);
?>
<table border="1" cellspacing="0">
	<tr>
		<th>Sl.no.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Action</th>
	</tr>
<?php 
$i=1;
while($result= mysqli_fetch_assoc($data))
{
?>	
	<tr>
		<td><?php echo $i;$i++;?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td>
			<a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
			<a href="delete.php?del=<?php echo $result['user_id']?>">delete</a></td>
	</tr>
<?php 
}
?>	
</table>