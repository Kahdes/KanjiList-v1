<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ConnectionController extends Controller {

	private $kanji;
	
	public function __construct() {
		$this->kanji = new Kanji();
	}

	public function index() {
		$this->generateView(array());	
	}

}