<?php 
class Student
{
	public $slength,$sbreath;
	function getdata($length,$breath)
	{

	}
	function showdata()
	{
		echo $length,$breath;
	}
}
$obj= new Student();
$obj-> getdata(5,6);
$obj-> showdata();
?>