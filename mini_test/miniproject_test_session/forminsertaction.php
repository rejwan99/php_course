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
$sql1="SELECT * FROM user WHERE email='$email'";
$data= mysqli_query($conn,$sql);
$data2= mysqli_query($conn,$sql1);
// if($data)
// {
   if($data2) 
     {
 	   echo "Email alredy existed";
     }
//     else 
//     {
//     	header("location:display.php");
//     }   
// // }
else
{
 echo "data not inserted";
}
?>

