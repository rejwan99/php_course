<?php
setcookie("name","Rejwan");
if (isset($_COOKIE["name"])) 
{
	echo "My name is: ".$_COOKIE["name"];
}
else
{
	echo "Cookie is not found";
}
?>