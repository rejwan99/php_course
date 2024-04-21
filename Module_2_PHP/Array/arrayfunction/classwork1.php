<?php 
$a= array(-6,-5,-7,-8,-2,0,0,1,2,3,4);
$num= array();
foreach($a as $b)
{
	if($b>0)
	{
		$num[]= $b;
	}
	if($b<0)
	{
		$num1[]= $b;
	}
	if($b==0)
	{
		$num2[]= $b;
	}
}
echo "Positive number are: ".implode(",", $num)."<br>";
echo "Nagetive number are: ".implode(",", $num1)."<br>";
echo "Zero are: ".implode(",", $num2)."<br>";

$n=count($a);
$pos= 0;
$neg=0;
$zero=0;
for($i=0;$i<$n;$i++)
{
 	if($a[$i]>0)
 	{
 		$pos++;
 	}
 	if($a[$i]<0)
 	{
 		$neg++;
 	}
 	if($a[$i]==0)
 	{
 		$zero++;
 	}
}
echo "Total positive number is :".$pos."<br>";
echo "Total negative number is :".$neg."<br>";
echo "Total zero is :".$zero."<br>";
?>