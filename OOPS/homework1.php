<?php 
class A
{
	function __construct($con1)
	{
		echo "This is constructor1";
	}
}
class B extends A
{
	function __construct($con2)
	{
		echo "This is constructor2";
	}
}
$obj= new B();
$obj-> __construct($con1);
echo "<br>";
$obj-> __construct($con2);
?>