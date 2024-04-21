<?php 
session_start();
Include("connection.php");
$id= $_SESSION["id"];
if($id=="")
{
   echo "<script>alert('**plese login again')</script>";
   echo "<script>window.location.href='login.php'</script>";
}
else
{
$sql= "SELECT * FROM user_pdo WHERE user_id=:id";
$data= $conn->prepare($sql);
$data->bindparam(':id',$id);
$data->execute();
$data1= $conn->prepare($sql);
$data1->bindparam(':id',$id);
$data1->execute();
$result1= $data1->fetch(PDO::FETCH_ASSOC);
$client=$result1["name"];
?>
<h3><i>Welecome <?php echo $client?><i></h3>
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
		<td><?php echo $i;$i++?></td>
		<td><?php echo $result["name"]?></td>
		<td><?php echo $result["email"]?></td>
		<td><?php echo $result["password"]?></td>
		<td><?php echo $result["phone"]?></td>
		<td><img src="<?php echo $result['picsource']?>" height="100" width="100"></td>
		<td><a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
			<a href="changepassword.php">change Password</a>
			<a href="logout.php">Logout</a></td>
	</tr>
	<?php	
	}}
	?>
</table>