<?php

namespace CoreTechs\Messenger;

interface ContactInterface
{
	public function setEmail($email);

	public function getEmail();

	public function setPhone($phone);

	public function getPhone();
}