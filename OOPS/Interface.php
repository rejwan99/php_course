<?php 
interface A
{
	function abc();
} 
interface B
{
	function mno();
}
class C implements A,B
{
	function abc()
	{
		echo "This is abc";
	}
	function mno()
	{
		echo "This is mno";
	}
	function xyz()
	{
		echo "This is xyz";

	}
}
$obj= new C();
$obj->xyz();
echo "<br>";
$obj->abc();
echo "<br>";
$obj->mno();
?>