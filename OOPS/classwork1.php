<?php 
function abc()
{
	for($i=10;$i>=1;$i--)
	{
		yield $i;
	}
}
$gen= abc();
$sum=0;
foreach($gen as $value)
{
	echo $value." ";
	$sum= $sum+$value;
}
echo "<br> The sum is: ".$sum;
?>