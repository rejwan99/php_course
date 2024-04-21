<?php 
$a= array(1,2,3,array(4,5,6),7,8,9);
$b=count($a);
echo $b."<br>";
for($i=0;$i<$b;$i++)
{
	if(is_array($a[$i]))
	{
 		echo "no". $i." "."is a array.";
	}
	else
	{
		echo "no". $i." "."is a value.";
	}
	echo "<br>";
}
?>