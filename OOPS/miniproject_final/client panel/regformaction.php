<?php 
include("connection.php");
$name= $_REQUEST["name"];
$add1= $_REQUEST["add1"];
$add2= $_REQUEST["add2"];
$dob= $_REQUEST["dob"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["password"]);
$phn= $_REQUEST["phone"];
$gen= $_REQUEST["gender"];
$deg= $_REQUEST["degree"];
$lang=implode(",",$_REQUEST["language"]);
$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);

//echo $name." ".$add1." ".$add2." ".$dob." ".$email." ".$pass." ".$phn." ".$gen." ".$deg." ".$lang." ".$folder;
$sql= "INSERT INTO `registration_pdo`(`name`, `address1`, `address2`, `dob`, `email`, `password`, `phone`, `gender`, `degree`, `language`, `image`) VALUES (:nme,:add1,:add2,:dob,:email,:pass,:phone,:gen,:deg,:lang,:img)";
$query= $conn->prepare($sql);
$query->bindparam(':nme',$name);
$query->bindparam(':add1',$add1);
$query->bindparam(':add2',$add2);
$query->bindparam(':dob',$dob);
$query->bindparam(':email',$email);
$query->bindparam(':pass',$pass);
$query->bindparam(':phone',$phn);
$query->bindparam(':gen',$gen);
$query->bindparam(':deg',$deg);
$query->bindparam(':lang',$lang);
$query->bindparam(':img',$folder);
$query->execute();
if($query->execute())
{
	//echo "Insert data succesfully";
	header("location:login.php");
}
else
{
	echo "Not Inserted";
}
?>