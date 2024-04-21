<?php 
include("connection.php");
$name= $_REQUEST["name"];
$add1= $_REQUEST["add1"];
$add2= $_REQUEST["add2"];
$dob= $_REQUEST["dob"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]); 
$phn= $_REQUEST["number"];
$gen= $_REQUEST["gen"];
$deg= $_REQUEST["deg"];
$lang= $_REQUEST["lang"];
$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);
// echo $name.", ".$add1.", ".$add2.", ".$dob.", ".$email.", ".$pass.", ".$phn.", ".$gen.", ".$deg.", ".$lang;
// echo "<br>";
// print_r($folder);
$sql= "INSERT INTO `clientpanel_ajax`(`user_id`, `name`, `address1`, `address2`, `dob`, `email`, `password`, `phone`, `gender`, `degree`, `language`, `picsource`) VALUES ('','$name','$add1','$add2','$dob','$email','$pass','$phn','$gen','$deg','$lang','$folder')";
$data= mysqli_query($conn,$sql);
if($data)
{
	//echo "data inserted";
	//header("location:login.php");
	echo "<script>alert('insert data succesful')</script>";
   echo "<script>window.location.href='login.php'</script>";
}
else
{
	echo "data not inserted";
}
?>