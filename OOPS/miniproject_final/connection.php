<?php 
$servername= "localhost";
$username= "root";
$password= "";
$db= "mwf12to03_new";
$conn= new PDO("mysql:host={$servername};dbname={$db}",$username,$password);
try
{
 //echo "Connection Successfully";
}
catch(PDOException $e)
{
	echo $e->getMassage();
}
?>