<?php 
class Student
{   
	public $mname,$mage;
	function getdata($name,$age)
	{
		$this->mname=$name;
		$this->mage=$age;
	}
	function showdata()
	{
		echo $this->mname,$this->mage;
	}
}
$obj= new Student();
$obj-> getdata("Rejwan",24);
$obj-> showdata();
?>