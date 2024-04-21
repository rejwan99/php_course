<?php 
$a= array("Rejwan"=>22,"Rahul"=>25);
print_r($a);
echo "<br>";
echo $a["Rejwan"];
echo "<br>";
print_r(array_keys($a));
echo "<br>";
foreach ($a as $key => $value) 
{
	echo "My name is: ".$key. " and my age is:".$value."<br>";
}
?>