<?php

class Users{
	public $name;
	public $email;
	public $profile;
	public $id;

	public function __construct($name,$email,$profile,$id)
	{
		$this->name = $name;
		$this->email = $email;
		$this->profile = $profile;
		$this->id = $id;

	}
}
?>