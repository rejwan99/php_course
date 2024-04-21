<?php 
Include("connection.php");
$sql= "SELECT * FROM user_pdo";
$data= $conn->query($sql);
//$result= $data->fetch(PDO::FETCH_ASSOC);
?>
<table border="1">
	<tr>
		<th>SL.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Picsource</th>
		<th>Action</th>
	</tr>
	<?php 
	$i=1;
	while($result= $data->fetch(PDO::FETCH_ASSOC))
	{
	?>
	<tr>
		<td><?php echo $i++?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td><img src="<?php echo $result["picsource"]?>" height="100" width="100"></td>
		<td><a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
			<a href="delete.php?del=<?php echo $result['user_id']?>">delete</a></td>
	</tr>
	<?php	
	}
	?>
</table>