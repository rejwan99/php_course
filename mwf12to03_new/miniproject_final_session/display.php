<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
if($id=="")
{
   echo "<script>alert('**plese login again')</script>";
   echo "<script>window.location.href='login.php'</script>";
}
else
{
$sql= "SELECT * FROM registration_user WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
// $result=mysqli_fetch_assoc($data);
// print_r($result["name"]);
?>
<table border="1">
	<tr>
		<th>Sl.no.</th>
		<th>Name</th>
		<th>Address1</th>
		<th>Address2</th>
		<th>DOB</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Degree</th>
		<th>Language</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
<?php 
$i=1;
while($result=mysqli_fetch_assoc($data))
{
	?>
		<tr>
			<td><?php echo $i;$i++;?></td>
			<td><?php echo $result["name"]?></td>
			<td><?php echo $result["address_1"]?></td>
			<td><?php echo $result["address_2"]?></td>
			<td><?php echo $result["dob"]?></td>
			<td><?php echo $result["email"]?></td>
			<td><?php echo $result["password"]?></td>
			<td><?php echo $result["phone"]?></td>
			<td><?php echo $result["gender"]?></td>
			<td><?php echo $result["degree"]?></td>
			<td><?php echo $result["language"]?></td>
			<td><img src="<?php echo $img=$result['image']?>" height="100" width="100"></td>
			<td><a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
				<a href="changepassword.php">changepassword</a>
				<a href="logout.php">logout</a>
			</td>
		</tr>
	<?php
}}
?>	
</table>