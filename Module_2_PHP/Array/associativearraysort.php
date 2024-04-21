<?php
$a= array("c"=>30,"a"=>20,"b"=>10);
// arsort($a);
krsort($a);
foreach ($a as $key => $value)
{
	echo "The key is: ".$key." and the value is: ".$value."<br>";
} 
?>