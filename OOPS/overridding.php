<?php 
class Teacher
{
	//parent class
	function abc()
	{
		echo "This is parent";
	}
}
class Student extends Teacher
{
	//child class
	function abc()
	{
		echo "This is child";
	}
}
$obj= new Student();
$obj->abc();
?>