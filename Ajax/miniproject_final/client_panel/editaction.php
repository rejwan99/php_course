<?php 
session_start();
include("connection.php");
$id=$_REQUEST["id"];
$name= $_REQUEST["name"];
$add1= $_REQUEST["add1"];
$add2= $_REQUEST["add2"];
$dob= $_REQUEST["dob"];
$email= $_REQUEST["email"];
$phn= $_REQUEST["number"];
$gen= $_REQUEST["gen"];
$deg= $_REQUEST["deg"];
$lang= $_REQUEST["lang"];

$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);
// echo $name.", ".$add1.", ".$add2.", ".$dob.", ".$email.", ".$phn.", ".$gen.", ".$deg.", ".$lang;
$oldimagepath=$_SESSION['oldimagepath'];
if($folder=="image/")
{
	$sql="UPDATE `clientpanel_ajax` SET `name`='$name',`address1`='$add1',`address2`='$add2',`dob`='$dob',`email`='$email',`phone`='$phn',`gender`='$gen',`degree`='$deg',`language`='$lang',`picsource`='$oldimagepath' WHERE  user_id='$id'";
	$data= mysqli_query($conn,$sql);
	if($data)
	{
		header("location:display.php");
	}
	else
	{
		echo "Data not updated";
	}
}	
else
{
	$sql="UPDATE `clientpanel_ajax` SET `name`='$name',`address1`='$add1',`address2`='$add2',`dob`='$dob',`email`='$email',`phone`='$phn',`gender`='$gen',`degree`='$deg',`language`='$lang',`picsource`='$folder' WHERE  user_id='$id'";
	$data= mysqli_query($conn,$sql);
	if($data)
	{
		header("location:display.php");
	}
	else
	{
		echo "Data not updated";
	}
}
?>