<?php

namespace CoreTechs\Messenger;

class Messenger
{

	protected $transportManager;

	public function send(Message $message, $transport = 'email')
	{
		$transport = $this->transportManager->get($transport);

		return $transport->send($message);
	}

	public function setTransportManager($transportManager)
	{
		$this->transportManager = $transportManager;
		return $this;
	}

}