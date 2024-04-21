<?php 
$a= array("red","blue","green");
$b= array("pink","white","grey");
$m= array_merge($a,$b);
print_r($m);
echo "<br>";
$i= implode(" ", $m);
echo $i;
echo "<br>";
$p= strrev($i);
echo $p;
echo "<br>";
$ex= explode(" " , $p);
print_r($ex);
echo "<br>";
echo "First word is: ";
$f= array_shift($ex);
print_r("First word is: ".$f);
echo "<br>";
$g= array_pop($ex);
print_r("Last word is: ".$g);
?>