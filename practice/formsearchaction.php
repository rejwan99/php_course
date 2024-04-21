<?php 
include("connection.php");
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["password"]);
$phn= $_REQUEST["phone"];
echo $name,$email,$pass,$phn;
// $sql= "SELECT * FROM `user1` WHERE email='$email' AND phone='$phn'";
// $data= mysqli_query($conn,$sql);

// if($data)
// {
// echo "Data found";
// }
// else
// {
// echo "plese validate your data";
// }
?>