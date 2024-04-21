<?php  
$a=1;
$b=0;
$c=$b;
for ($i=1; $i<8; $i++) 
	{
		echo $c."<br>";
		$c=$a+$b;
		$a=$b;
		$b=$c;
	}
?>