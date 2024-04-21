<?php
$a= array(3,8,"rejwan",7,1);
print_r($a);
echo "<br>";
var_dump($a);
echo "<br>";
echo $a[4];
echo "<br>";
$n= count($a);
for($i=0;$i<$n;$i++)
{
	echo $a[$i]." ";
}
?>