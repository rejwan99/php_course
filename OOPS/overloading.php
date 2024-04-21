<?php 
class Student
{
	function mno($a,$b,$c)
	{
		echo ($a+$b+$c);
	}
	function mno($a,$b)
	{
		echo ($a+$b);
	}
}
$obj= new Student();
$obj->mno(10,20,30);
?>