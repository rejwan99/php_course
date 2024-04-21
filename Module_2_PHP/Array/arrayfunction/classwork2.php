<?php 
$a=array(1,2,3);
$b=array(4,5,6);
$c= array(7,8,9);
$d= array(10,11,12);
$n= array_combine($a,$b);
$m= array_combine($c,$d);
$k= array_merge($n,$m);
print_r($k);
?>