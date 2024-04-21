<?php
$name= $_REQUEST["name"];
$filename= $_FILES["uploadimage"];

echo $name;
echo "<br>";
print_r($filename);
?>