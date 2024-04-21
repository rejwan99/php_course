<?php 
$a= "Today is very cold day";
$b= explode("", $a);
$c= array_shift($b);
$d= array_pop($b);
print_r($c,$d);
?>