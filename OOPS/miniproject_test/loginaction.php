<?php 
include("connection.php");
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
$sql= "SELECT * FROM user_pdo WHERE email=:eml AND password=:pass";
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