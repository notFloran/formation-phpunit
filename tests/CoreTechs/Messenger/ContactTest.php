<?php

namespace CoreTechs\Messenger;

class ContactTest extends \PHPUnit_Framework_TestCase
{
	protected $recipient;

	public function setUp()
	{
		$this->contact = new Contact();
	}

	public function testNamePropertyAccessors()
	{
		// prepare
		$name = "floran";

		// run
		$fluent = $this->contact->setName($name);

		// assert
		$this->assertAttributeEquals($name, 'name', $this->contact);
		$this->assertEquals($name, $this->contact->getName());
		$this->assertSame($this->contact, $fluent);
	}

	public function testEmailPropertyAccessors()
	{
		// prepare
		$email = 'floran@brutel.fr';

		// run
		$fluent = $this->contact->setEmail($email);

		// assert
		$this->assertAttributeEquals($email, 'email', $this->contact);
		$this->assertEquals($email, $this->contact->getEmail());
		$this->assertSame($this->contact, $fluent);
	}

	public function testEmailSetterRefuseInvalidEmail()
	{
		// prepare
		$email = "invalid email";

		// assert
		$this->setExpectedException('Exception');

		// run
		$this->contact->setEmail($email);
	}

	public function testPhonePropertyAccessors()
	{
		// prepare
		$phone = "0300000000";

		// run
		$fluent = $this->contact->setPhone($phone);

		// assert
		$this->assertAttributeEquals($phone, 'phone', $this->contact);
		$this->assertEquals($phone, $this->contact->getPhone());
		$this->assertSame($this->contact, $fluent);
	}

}