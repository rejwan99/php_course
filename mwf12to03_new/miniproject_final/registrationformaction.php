<?php 
include("connection.php");
$name=$_REQUEST["name"];
$add1=$_REQUEST["add1"];
$add2=$_REQUEST["add2"];
$dob=$_REQUEST["dob"];
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$phn=$_REQUEST["phone"];
$gen=$_REQUEST["gender"];
$deg=$_REQUEST["degree"];
$lang=implode(",",$_REQUEST["language"]);

$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);

// echo $name,$add1,$add2,$dob,$email,$pass,$phn,$gen,$deg,$lang;
$sql1="SELECT email FROM registration_user WHERE email='$email'";
$data1= mysqli_query($conn,$sql1);
$total= mysqli_num_rows($data1);
if($total)
{
	echo "Email already Existed";
}
else
{
	//echo "done";
    $sql="INSERT INTO `registration_user`(`user_id`, `name`, `address_1`, `address_2`, `dob`, `email`, `password`, `phone`, `gender`, `degree`, `language`,`image`) VALUES ('','$name','$add1','$add2','$dob','$email','$pass','$phn','$gen','$deg','$lang','$folder')";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
       // echo "Data Insert Successfully";
	  header("location:login.php");
    }
    else
    {
	  echo "Not Inserted";
    }
}
?>