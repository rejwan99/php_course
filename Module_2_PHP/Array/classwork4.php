<?php 
$a= array(1,2,3,array(4,5,6),7,8,9);
$b=count($a);
for($i=0;$i<$b;$i++)
{
	if(is_array($a[$i]))
	{
 		echo "array no". $i." ";
	}
	else
	{
		echo "value no". $i." ";
	}
	echo "<br>";
}
?>