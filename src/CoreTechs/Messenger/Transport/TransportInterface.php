<?php

namespace CoreTechs\Messenger\Transport;

Use CoreTechs\Messenger\Message;

interface TransportInterface
{
	public function send(Message $message);
}