<?php 
include("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$pho=$_REQUEST["phone"];

$filename1=$_FILES["image1"]["name"];
$tempname1=$_FILES["image1"]["tmp_name"];
$folder1="image/".$filename1;
move_uploaded_file($tempname1, $folder1);
$filename2=$_FILES["image2"]["name"];
$tempname2=$_FILES["image2"]["tmp_name"];
$folder2="image/".$filename2;
move_uploaded_file($tempname2, $folder2);

$folder= $folder1.$folder2;

// echo $name,$email,$pass,$pho,$folder,$folder1;

$sql="INSERT INTO `multiimage_table1`(`user_id`, `name`, `email`, `password`, `phone`, `picsource`) VALUES ('','$name','$email','$pass','$pho','$folder')";
$data= mysqli_query($conn,$sql);
if($data)
{
    header("location:login.php");
}
else
{
	echo "data not inserted";
}
?>