<?php 
$a=0;
for($i=2;$i<=100;$i+=2) 
{ 
	if($i%2==0)
	{
		$a=$i+$a;
	}
	echo $i." ";
}
echo "<br>"."The Sum of Even number of 2-100 is: ".$a;
?>