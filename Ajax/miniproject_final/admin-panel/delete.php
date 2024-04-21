<?php
include("connection.php");
$id=$_REQUEST["del"];
$sql= "DELETE FROM `registration_ajax` WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
if($data)
{
	header("location:display.php");
} 
else
{
	echo "Data not deleted";
}
?>