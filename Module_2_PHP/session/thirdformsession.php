<?php 
session_start();
echo "My name is: ".$_SESSION["name"]."<br>";
echo "My email is: ".$_SESSION["email"]."<br>";
echo "my password is: ".$_SESSION["pass"]."<br>";
echo "my phone number is: ". $_SESSION["phone"]."<br>";
?>