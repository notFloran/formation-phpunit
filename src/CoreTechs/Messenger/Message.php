<?php

namespace CoreTechs\Messenger;

class Message
{

	protected $content;

	protected $recipient;

	protected $sender;

	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setRecipient(ContactInterface $recipient) {
		$this->recipient = $recipient;
		return $this;
	}

	public function getRecipient()
	{
		return $this->recipient;
	}

	public function setSender(ContactInterface $sender)
	{
		$this->sender = $sender;
		return $this;
	}

	public function getSender()
	{
		return $this->sender;
	}

}