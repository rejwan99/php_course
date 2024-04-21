<?php 
class Book
{
	function mno()
	{

	}
}
class Name extends Book
{
	function mno()
	{
		echo "The name of book is Shesher Kabita";
	}
}
class Author extends Book
{
	function mno()
	{
		echo "The Author name of the book is Rabindranath Tagore";
	}
}
class Isba extends Book
{
	function mno()
	{
		echo "The ISBA no is ISBA0045";
	}
}
class Price extends Book
{
	function mno()
	{
		echo "The book pricce is = 250 ";
	}
}
$obj= array();
$obj[0]= new Name();
$obj[1]= new Author();
$obj[2]= new Isba();
$obj[3]= new Price();
for($i=0;$i<4;$i++)
{
	$obj[$i]->mno();
	echo "<br>";
}
?>