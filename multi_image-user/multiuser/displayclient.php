<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
$sql= "SELECT * FROM multiuser_table WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$data1= mysqli_query($conn,$sql);
$resultt= mysqli_fetch_assoc($data1);
// print_r($resultt["name"]);
$client=$resultt["name"];
?>
<h3>Welecome <?php echo $client?></h3>
<table border="1">
	<tr>
		<th>Sl.no.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>user</th>
		
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
		<td><?php echo $result["user"]?></td>
	</tr>
<?php
}
?>	
</table>
