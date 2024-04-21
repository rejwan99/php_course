<?php 
class Student
{
	function abc()
	{
		echo " love ";
	}
	function __construct()
	{
		echo "I";
	}
	function __destruct()
	{
		echo "country.";
	}
	function mno()
	{
		echo "our ";

	}
}
$obj= new Student();
$obj->abc();
$obj->mno();
?>