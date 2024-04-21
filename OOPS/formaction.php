<?php 
$l= $_REQUEST["length"];
$b= $_REQUEST["bredth"];
//echo $l,$b;
class Rect
{
	public $mll,$mbb;
	function getdata($ll,$bb)
	{
		$this->$mll=$ll;
		$this->$mbb=$mbb;
	}
	function area()
	{
		echo "The area is: ".($this->$mll*$this->$mbb);
	}
	function peri()
	{
		echo "The perimeter is: ".(2*($this->$mll+$this->$mbb));
	}
}
$obj= new Rect($l,$b);
$obj->area();
$obj->peri();

?>