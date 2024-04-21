<?php 
$temp= $_REQUEST["temp"];

class Tempareture
{
	public $mc;
	function __construct($c)
	{
		$this->mc=$c;
	}
	function feh()
	{
		echo $this->mc." degree celsius= ".(($this->mc*9/5)+32)." degree fehrenheit";
	}
}
$obj= new Tempareture($temp);
$obj->feh();
?>