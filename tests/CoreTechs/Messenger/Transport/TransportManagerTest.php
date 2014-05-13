<?php

namespace CoreTechs\Messenger\Transport;

class TransportManagerTest extends \PHPUnit_Framework_TestCase
{
	protected $manager;

	public function setUp()
	{
		$this->manager = new TransportManager();
	}

	public function testManagerInstanciatesCorrectTransportClasses()
	{
		// prepare
		$channel = 'email';

		// run
		$transport = $this->manager->get($channel);

		// assert
		$this->assertInstanceOf('CoreTechs\Messenger\Transport\Email', $transport);
	}

	public function testManagerFailsIfUnknownTransport()
	{
		// prepare
		$channel = uniqid();

		// asset
		$this->setExpectedException('Exception');

		// run
		$transport = $this->manager->get($channel);
	}

}