<?php 
session_start();
echo "My name is: ".$_SESSION["name"]."<br>";
echo "my degree is: ".$_SESSION["degree"];
?>