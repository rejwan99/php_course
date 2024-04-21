<?php 
$a= array(array(1,2,3),array(4,5,6),array(7,8,9));
echo "The matrix of a is: ";
echo "<br>";
echo $a[0][0]." ".$a[0][1]." ".$a[0][2];
echo "<br>";
echo $a[1][0]." ".$a[1][1]." ".$a[1][2];
echo "<br>";
echo $a[2][0]." ".$a[2][1]." ".$a[2][2];
echo "<br>";
$b= array(array(1,2,3),array(4,5,6),array(7,8,9));
echo "The matrix of b is: ";
echo "<br>";
echo $b[0][0]." ".$b[0][1]." ".$b[0][2];
echo "<br>";
echo $b[1][0]." ".$b[1][1]." ".$b[1][2];
echo "<br>";
echo $b[2][0]." ".$b[2][1]." ".$b[2][2];
echo "<br>";
echo "sum of matrix : ";
echo "<br>";
echo $a[0][0]+$b[0][0];
?>