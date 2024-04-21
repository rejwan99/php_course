<?php 
session_start();	
$_SESSION["number"]=$_SESSION["number"]+1;	
echo "Page count = " .$_SESSION["number"];
?>