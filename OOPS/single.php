<?php 
class A
{
	//parent class
	function xyz()
	{
		echo "This is a parent class";
	}
}
class B extends A
{
	//child class
	function mno()
	{
		echo "This is a child class";
	}
}
$obj= new B();
$obj->mno();
echo "<br>";
$obj->xyz();
?>