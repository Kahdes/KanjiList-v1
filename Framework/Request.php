
<?php

require_once('Session.php');

class Request {

	private $parameters;
	private $session;

	public function __construct($parameters) {
		$this->parameters = $parameters;
		$this->session = new Session();
	}

	public function getSession() {
		return $this->session;
	}

	public function isParameter($name) {
		return (isset($this->parameters[$name]) && $this->parameters[$name] !== "");
	}

	public function getParameter($name) {
		if ($this->isParameter($name)) {
			return $this->parameters[$name];
		} else {
			throw new Exception("Paramètre '$name' inexistant");			
		}
	}
	
}