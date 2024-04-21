<?php 
include("connection.php");
session_start();
include("connection.php");
$email=$_SESSION["email"];
$sql= "SELECT * FROM `user1` WHERE email='$email' AND phone='$phone'";
$data= mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
?>

<table border="1" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
	</tr>

	<tr>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
	</tr>
</table>