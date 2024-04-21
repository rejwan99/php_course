<?php 
class A
{
	function __construct()
	{
		echo "This is constructor 1";
	}
}
class B extends A
{
	function __construct()
	{
		A::__construct();// Default constructor
		echo "<br>This is constructor 2";
	}
}
$obj= new B();
?>