<?php

require_once('Framework/Controller.php');
require_once('Model/Hiragana.php');
require_once('Model/Katakana.php');

class AlphabetsController extends Controller {

	private $hiragana;
	private $katakana;
	
	public function __construct() {
		$this->hiragana = new Hiragana();
		$this->katakana = new Katakana();
	}

	public function index() {
		$this->generateView(array());
	}

	public function hiragana() {
		$this->generateView(array(
			'hiragana' => $this->hiragana->getAllHira()
		));		
	}

	public function katakana() {
		$this->generateView(array(
			'katakana' => $this->katakana->getAllKata()
		));
	}

}