<?php
// src/Singleton.php

namespace SingletonPattern;

class Singleton
{
	private static $instance;

	private $time;

	private function __construct()
	{
		$this->time = time();
	}

	public function getTime()
	{
		return $this->time;
	}

	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	final public function __clone()
	{
		throw new Exception("Clone is forbbiden", 1);
	}

	final public function __wakeup()
	{
		throw new Exception("Wakeup is forbbiden", 1);
	}
}