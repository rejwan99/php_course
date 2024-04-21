<?php 
include("connection.php");
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
//echo $email." ".$pass;
$sql= "SELECT * FROM `registration_pdo` WHERE email=:eml AND password=:pass";
$query= $conn->prepare($sql);
$query->bindparam(':eml',$email);
$query->bindparam(':pass',$pass);
$query->execute();
if($query->rowCount())
{
	//echo "Login Successful";
	header("location:display.php");
}
else
{
   echo "Login Failed";
}
?>