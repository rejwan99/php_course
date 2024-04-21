<?php 
include("connection.php");
session_start();
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
// echo $id." ".$name." ".$add1." ".$add2." ".$dob." ".$email." ".$phn." ".$gen." ".$deg." ".$lang." ".$folder;
$oldimagepath=$_SESSION['oldimagepath'];
if($folder=="image/")
{
	$sql="UPDATE `registration_pdo` SET `name`=:nme,`address1`=:add1,`address2`=:add2,`dob`=:dob,`email`=:email,`phone`=:phn,`gender`=:gen,`degree`=:deg,`language`=:lang,`image`=:fol WHERE user_id=:id";
	$query= $conn->prepare($sql);
	$query->bindparam(':id',$id);
	$query->bindparam(':nme',$name);
	$query->bindparam(':add1',$add1);
	$query->bindparam(':add2',$add2);
	$query->bindparam(':dob',$dob);
	$query->bindparam(':email',$email);
	$query->bindparam(':phn',$phn);
	$query->bindparam(':gen',$gen);
	$query->bindparam(':deg',$deg);
	$query->bindparam(':lang',$lang);
	$query->bindparam(':fol',$oldimagepath);
	$query->execute();
	if($query->execute())
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
	$sql="UPDATE `registration_pdo` SET `name`=:nme,`address1`=:add1,`address2`=:add2,`dob`=:dob,`email`=:email,`phone`=:phn,`gender`=:gen,`degree`=:deg,`language`=:lang,`image`=:folder WHERE user_id=:id";
	$query= $conn->prepare($sql);
	$query->bindparam(':id',$id);
	$query->bindparam(':nme',$name);
	$query->bindparam(':add1',$add1);
	$query->bindparam(':add2',$add2);
	$query->bindparam(':dob',$dob);
	$query->bindparam(':email',$email);
	$query->bindparam(':phn',$phn);
	$query->bindparam(':gen',$gen);
	$query->bindparam(':deg',$deg);
	$query->bindparam(':lang',$lang);
	$query->bindparam(':folder',$folder);
	$query->execute();
	if($query->execute())
	{
		header("location:display.php");
	}
	else
	{
		echo "Data not updated";
	}
}
?>