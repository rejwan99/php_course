<?php
$n=$_REQUEST["s11"];
for($i=1;$i<=$n;$i++)
{
	if($n%$i==0)
	{
		echo $i ;
	}
}
?>