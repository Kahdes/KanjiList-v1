<?php

class Request {

	private $parameters;

	public function __construct($parameters) {
		$this->parameters = $parameters;
	}

	//ETAPE 5,9
	public function isParameter($name) {
		return (isset($this->parameters[$name]) && $this->parameters[$name] !== "");
	}

	//ETAPE 6,10
	public function getParameter($name) {
		if ($this->isParameter($name)) {
			return $this->parameters[$name];
		} else {
			throw new Exception("Paramètre '$name' inexistant");			
		}
	}
	
}