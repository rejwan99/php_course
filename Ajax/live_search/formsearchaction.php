<?php 
session_start();
include("connection.php");
$name= $_REQUEST["name"];

// echo $name;
$sql= "SELECT * FROM `user1` WHERE `name`='$name'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$total= mysqli_num_rows($data);
if($total==0)
{
	echo "No record found";
}
else
{
	if($data)
	{
		//echo "record found";
		$_SESSION["name"]=$result["name"];
		header("location:display.php");
	}
	else
	{	
		echo "no record found";
	}
}
?>