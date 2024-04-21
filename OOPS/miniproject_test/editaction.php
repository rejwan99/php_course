<?php 
session_start();
include("connection.php");
$id=$_REQUEST["uid"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phn=$_REQUEST["phone"];

$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);

$oldimagepath=$_SESSION['oldimagepath'];

if($folder=="image/")
{
	$sql="UPDATE `user_pdo` SET `name`=:nme,`email`=:eml,`phone`=:phn,`picsource`=:oimg WHERE user_id=:id";
	$query= $conn->prepare($sql);
	$query->bindparam(':id',$id);
	$query->bindparam(':nme',$name);
	$query->bindparam(':eml',$email);
	$query->bindparam(':phn',$phn);
	$query->bindparam(':oimg',$oldimagepath);
	$query->execute();
	if($query->execute())
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
	$sql="UPDATE `user_pdo` SET `name`=:nme,`email`=:eml,`phone`=:phn,`picsource`=:img WHERE user_id=:id";
	$query= $conn->prepare($sql);
	$query->bindparam(':id',$id);
	$query->bindparam(':nme',$name);
	$query->bindparam(':eml',$email);
	$query->bindparam(':phn',$phn);
	$query->bindparam(':img',$folder);
	$query->execute();
	if($query->execute())
	{
 		//echo "Insert Data Successfully";
		header("location:display.php");
	}
	else
	{
		echo "Not updated";
	}
}
?>