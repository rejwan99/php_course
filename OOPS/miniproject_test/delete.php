<?php 
include("connection.php");
$id= $_REQUEST["del"];
$sql="DELETE FROM `user_pdo` WHERE user_id=:id";
$query= $conn->prepare($sql);
$query->bindparam(':id',$id);
$query->execute();
if($query->execute())
{
	//echo "Data deleted";
	header("location:display.php");
}
else
{
	echo "Not deleted";
}
?>