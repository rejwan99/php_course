<?php 
include("connection.php");
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
$phn= $_REQUEST["phone"];

$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);

//echo $name." ".$email." ".$pass." ".$phn;
$sql= "INSERT INTO `user_pdo`(`name`, `email`, `password`, `phone`, `picsource`) VALUES (:nme,:email,:pass,:phone,:img)";
$query= $conn->prepare($sql);
$query->bindparam(':nme',$name);
$query->bindparam(':email',$email);
$query->bindparam(':pass',$pass);
$query->bindparam(':phone',$phn);
$query->bindparam(':img',$folder);
if($query->execute())
{
	//echo "Update data succesfully";
	header("location:login.php");
}
else
{
	echo "Not Updated";
}
?>