<?php

namespace CoreTechs\Messenger\Transport;

Use CoreTechs\Messenger\Message;

class TransportManager
{

	protected $transportMap = ['email' => Email::CLASS];

	public function get($transportName)
	{
		if(isset($this->transportMap[$transportName]))
		{
			return new $this->transportMap[$transportName];
		}

		throw new \Exception('Unknown transport');
	}

}