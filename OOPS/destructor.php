<?php 
class Student
{
	function __destruct()
	{
		echo "This is destructor";
	}
}
$obj= new Student();
?>