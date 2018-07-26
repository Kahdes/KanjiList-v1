<?php

require_once('Framework/Controller.php');
require_once('Model/Hiragana.php');
require_once('Model/Katakana.php');

//CLASSE CONTROLEUR POUR PAGES/ACTIONS D'ALPHABETS
class AlphabetsController extends Controller {

	private $hiragana;
	private $katakana;

	public function __construct() {
		$this->hiragana = new Hiragana();
		$this->katakana = new Katakana();
	}

//ACTIONS

	//PAGE SELECTION D'ALPHABET PAR DEFAUT
	public function index() {
		$this->generateView(array());
	}

	//PAGE ALPHABET HIRAGANA
	public function hiragana() {
		$this->generateView(array(
			'letters' => $this->hiragana->getAllHira(),
			'table_t' => 'Hiragana'
		));
	}

	//PAGE ALPHABET KATAKANA
	public function katakana() {
		$this->generateView(array(
			'letters' => $this->katakana->getAllKata(),
			'table_t' => 'Katakana'
		));
	}

}
