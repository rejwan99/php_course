<?php 
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
echo "The matrix of a is: ";
echo "<br>";
for ($row=0; $row < 3 ; $row++) 
{ 
	for ($col=0; $col < 3 ; $col++) 
	{ 
		echo $a[$row][$col]." ";
	}
	echo "<br>";
}
$b=array(array(1,2,3),array(4,5,6),array(7,8,9));
echo "The matrix of b is: ";
echo "<br>";
for ($row=0; $row < 3 ; $row++) 
{ 
	for ($col=0; $col < 3 ; $col++) 
	{ 
		echo $b[$row][$col]." ";
	}
	echo "<br>";
}

$rows = count($a);
$cols = count($a[0]);
for($i = 0; $i < $rows; $i++)
{
	for($j = 0; $j < $cols; $j++)
	{
		$sum[$i][$j] =0;
		$sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
	}
}
echo "The sum of a & b is: ";
echo "<br>";
for($i = 0; $i < $rows; $i++)
{
	for($j = 0; $j < $cols; $j++)
	{
		echo($sum[$i][$j] . " ");
	}
	echo "<br>";
}
echo "Diagonal Sum :";
$s=0;
for ($i=0;$i<3;$i++)
 {
 	$s=$s+$a[$i][$i];
 }
 echo "The sum is:".$s;
?>