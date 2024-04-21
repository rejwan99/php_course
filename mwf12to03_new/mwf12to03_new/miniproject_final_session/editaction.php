<?php 
session_start();
include("connection.php");
$id=$_REQUEST["uid"];
$name=$_REQUEST["name"];
$add1=$_REQUEST["add1"];
$add2=$_REQUEST["add2"];
$dob=$_REQUEST["dob"];
$email=$_REQUEST["email"];
$phn=$_REQUEST["phone"];
$gen=$_REQUEST["gender"];
$deg=$_REQUEST["degree"];
$lang=implode(",",$_REQUEST["language"]);

$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);

$oldimgpath=$_SESSION["oldimgpath"];
if($folder=="image/")
{
	$sql="UPDATE `registration_user` SET `name`='$name',`address_1`='$add1',`address_2`='$add2',`dob`='$dob',`email`='$email',`phone`='$phn',`gender`='$gen',`degree`='$deg',`language`='$lang',`image`='$oldimgpath' WHERE user_id=$id";
	$data=mysqli_query($conn,$sql);
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
	$sql="UPDATE `registration_user` SET `name`='$name',`address_1`='$add1',`address_2`='$add2',`dob`='$dob',`email`='$email',`phone`='$phn',`gender`='$gen',`degree`='$deg',`language`='$lang',`image`='$folder' WHERE user_id=$id";
	$data=mysqli_query($conn,$sql);
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