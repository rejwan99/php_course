<?php  
include("connection.php");
$id= $_REQUEST["id"];
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$phone= $_REQUEST["number"];
// echo $id,$name,$email,$phone;
$sql= "UPDATE `user1` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
if($data)
	{
 		// echo "Insert Data Successfully";
		header("location:display.php");
	}
	else
	{
		echo "Not updated";
	}
?>