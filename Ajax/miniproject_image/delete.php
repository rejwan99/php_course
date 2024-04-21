<?php 
include("connection.php");
$id= $_REQUEST["del"];
$sql="DELETE FROM `user_image` WHERE user_id='$id'";
$data=mysqli_query($conn,$sql);
if($data)
{
	//echo "Data deleted";
	header("location:display.php");
}
else
{
	echo "Not deleted";
}
?>