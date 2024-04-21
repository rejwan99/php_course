<?php 
session_start();
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM multiuser_table WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
$user=$result["user"];
print_r($user);
if($total)
{
  if($result["auth"]!=0)
  {
    echo "<script>alert('**You are blocked by admin')</script>";
    echo "<script>window.location.href='login.php'</script>";
  }
  else
  {
    if($user=="admin")
    {
      header("location:displayclints.php");
    }
    else
    {
       $_SESSION["id"]=$result["user_id"];
       header("location:displayclient.php");
    }
  }
}
else
{
  echo "login failure";
}
?>