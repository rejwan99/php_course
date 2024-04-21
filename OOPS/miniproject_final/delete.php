<?php 
include("connection.php");
$id=$_REQUEST["del"];
$sql="DELETE FROM `registration_pdo` WHERE user_id=:id";
$query= $conn->prepare($sql);
$query->bindparam(':id',$id);
$query->execute();
if($query->execute())
{
	header("location:display.php");
}
else
{
	echo "not deleted";
}
?>