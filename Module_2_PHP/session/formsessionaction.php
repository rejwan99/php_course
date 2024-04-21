<?php 
session_start();
$_SESSION["name"]= $_REQUEST["name"];
$_SESSION["email"]= $_REQUEST["email"];
$_SESSION["pass"]= $_REQUEST["pass"];
$_SESSION["phone"]= $_REQUEST["phone"];
echo "My name is: ".$_SESSION["name"]."<br>";
echo "My email is: ".$_SESSION["email"]."<br>";
echo "My password is: ".$_SESSION["pass"]."<br>";
echo "My phone number is: ".$_SESSION["phone"]."<br>";
?>