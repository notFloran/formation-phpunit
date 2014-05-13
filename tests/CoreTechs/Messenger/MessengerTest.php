<?php

namespace CoreTechs\Messenger;

Use CoreTechs\Messenger\Transport\TransportManager;
Use CoreTechs\Messenger\Transport\Email;

class MessagerTest extends \PHPUnit_Framework_TestCase
{

	protected $messenger;

	public function setUp()
	{
		$this->messenger = new Messenger();
	}

	public function testMessengerSendMessageUsingAppropriateTransport()
	{
		// PREPARE
		$message = $this->getMock(Message::CLASS);

		$transport = $this->getMock(Email::CLASS, ['send']);
		$transport
			->expects($this->once())
			->method('send')
			->with($message)
		;

		$transportManager = $this->getMock(TransportManager::CLASS, ['get']);
		$transportManager
			->expects($this->once())
			->method('get')
			->with('email')
			->willReturn($transport)
		;

		$this->messenger->setTransportManager($transportManager);

		// run
		$this->messenger->send($message);
	}

}