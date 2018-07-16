<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ConnectionController extends Controller {
	
	public function __construct() {
	}

	public function index() {
		$this->generateView(array());
	}

}