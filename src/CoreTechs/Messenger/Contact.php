<?php

namespace CoreTechs\Messenger;

class Contact implements ContactInterface
{

	protected $name;

	protected $email;

	protected $phone;

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setEmail($email)
	{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new \Exception('invalid email');
		}
		$this->email = $email;
		return $this;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	public function getPhone() {
		return $this->phone;
	}
}