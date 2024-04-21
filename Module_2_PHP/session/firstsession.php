<?php 
session_start();
$_SESSION["name"]= "Rejwan Mondal";
$_SESSION["degree"]= "B.Sc";
echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["degree"];
echo "<br>";
// session_unset();
session_destroy();
echo $_SESSION["name"];
?>