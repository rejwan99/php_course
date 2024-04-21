<?php 
include("connection.php");
session_start();
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
$sql= "SELECT * FROM user_pdo WHERE email=:eml AND password=:pass";
$query= $conn->prepare($sql);
$query->bindparam(':eml',$email);
$query->bindparam(':pass',$pass);
$query->execute();

$result= $query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount())
{
	//echo "Login Successful";
	$_SESSION["id"]=$result["user_id"];
	header("location:display.php");
}
else
{
   echo "Login Failed";
}
?>