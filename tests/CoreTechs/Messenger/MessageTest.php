<?php

namespace CoreTechs\Messenger;

class MessageTest extends \PHPUnit_Framework_TestCase
{

	protected $message;

	public function setUp()
	{
		$this->message = new Message();
	}

	public function testContentPropertyAccessors() {
		// prepare
		$content = uniqid();

		// run
		$fluent = $this->message->setContent($content);

		// assert
		$this->assertAttributeEquals($content, 'content', $this->message);
		$this->assertEquals($content, $this->message->getContent());
		$this->assertSame($this->message, $fluent);
	}

	public function testRecipientPropertyAccessors()
	{
		// prepare
		$recipient = $this->getMock(ContactInterface::CLASS);

		// run
		$fluent = $this->message->setRecipient($recipient);

		// assert
		$this->assertAttributeEquals($recipient, 'recipient', $this->message);
		$this->assertEquals($recipient, $this->message->getRecipient());
		$this->assertSame($this->message, $fluent);
	}

	public function testSenderPropertyAccessors() {
		// prepare
		$sender = $this->getMock(ContactInterface::CLASS);

		// run
		$fluent = $this->message->setSender($sender);

		// assert
		$this->assertAttributeEquals($sender, 'sender', $this->message);
		$this->assertEquals($sender, $this->message->getSender());
		$this->assertSame($this->message, $fluent);
	}

}