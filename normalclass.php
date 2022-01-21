<?php
class Person{
	public $name;
	public $number;
	public $status;

	public function showName()
	{
		echo "The Name is {$this->name}<br>";
		echo "The Number is {$this->number}<br>";
		echo "The Status is {$this->status}<br>";
	}
}

$personOne = new Person();
$personOne->name ="Priya";
$personOne->number = 1957345431;
$personOne -> status = "active";
$personOne->showName();
$personTwo = new Person();
$personTwo->name ="Heli";
$personTwo->number = 1957345431;
$personTwo -> status = "active";
$personTwo->showName();
?>