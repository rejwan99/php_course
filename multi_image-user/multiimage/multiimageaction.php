<?php 
include("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$pho=$_REQUEST["phone"];

$filename=$_FILES["image1"]["name"];
$tempname=$_FILES["image1"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);
$filename1=$_FILES["image2"]["name"];
$tempname1=$_FILES["image2"]["tmp_name"];
$folder1="image/".$filename1;
move_uploaded_file($tempname1, $folder1);

// echo $name,$email,$pass,$pho,$folder,$folder1;

$sql="INSERT INTO `multiimage_table`(`user_id`, `name`, `email`, `password`, `phone`, `picsource`) VALUES ('','$name','$email','$pass','$pho','$folder,$folder1')";
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