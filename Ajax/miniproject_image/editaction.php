<?php  
session_start();
include("connection.php");
$id= $_REQUEST["id"];
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$phone= $_REQUEST["phn"];
$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);

$oldimagepath=$_SESSION['oldimagepath'];
if($folder=="image/")
{
    $sql="UPDATE `user_image` SET `name`='$name',`email`='$email',`phone`='$phn',`picsource`='$oldimagepath' WHERE user_id='$id'";
	$data= mysqli_query($conn,$sql);
	if($data)
	{
 		//echo "Insert Data Successfully";
		header("location:display.php");
	}
	else
	{
		echo "Not updated";
	}
}
else
{
	$sql= "UPDATE `user_image` SET `name`='$name',`email`='$email',`phone`='$phone',`picsource`='$folder' WHERE user_id='$id'";
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
}	
?>