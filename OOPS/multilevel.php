<?php 
class A
{
	function abc()
	{
		echo "This is parent class";
	}
}
class B extends A
{
	function mno()
	{
		echo "This is 1st child class";
	}
}
class C extends B
{
	function xyz()
	{
		echo "This is 2nd child class";
	}
}
$obj= new C();
$obj->xyz();
echo "<br>";
$obj->abc();
echo "<br>";
$obj->mno();

?>