<?php
class Profiles{
    public $name;
	public $number;
	public $status;

	public function __construct($newName,$newNumber,$newStatus)
	{
		$this->name = $newName;
		$this->number= $newNumber;
		$this->status = $newStatus;
	}

	public function showProfile()
	{
		echo "Name :$this->name";
	}

}

$profileOne = new Profiles('Tarek',2323,'Active');
$profileOne->showProfile();

?>