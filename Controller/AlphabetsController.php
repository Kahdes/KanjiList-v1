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

//ACTIONS

	public function index() {
		$this->generateView(array());
	}
	
	public function hiragana() {
		$this->generateView(array(
			'letters' => $this->hiragana->getAllHira(),
			'table_t' => 'Hiragana'
		));		
	}

	public function katakana() {
		$this->generateView(array(
			'letters' => $this->katakana->getAllKata(),
			'table_t' => 'Katakana'
		));
	}

}