<?php 
include("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$phn=$_REQUEST["phone"];

$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);
$sql="INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`,`picsource`) VALUES ('','$name','$email','$pass','$phn','$folder')";
$data= mysqli_query($conn,$sql);


$sql1="SELECT * FROM 'user' WHERE email='$email'";
$data1= mysqli_query($conn,$sql1);
$total= mysqli_num_rows($data1);
if($total)
{
	echo "Email alredy existed";
}
else
{
	echo "Email alredy not existed";
// if($data)
// {
//  echo "Insert Data Successfully";
// 	// header("location:login.php");
// }
// else
// {
// 	echo "Data not inserted";
// }
}	
?>