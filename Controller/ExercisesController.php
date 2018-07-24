<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ExercisesController extends Controller {
	
	private $kanji;

	public function __construct() {
		$this->kanji = new Kanji();
	}

//ACTIONS

	public function index() {
		$this->generateView(array());
	}

	public function random() {
		$limit = 10;
		$this->generateView(array(
			'r_kanji' => $this->kanji->getRandomKanji($limit)
		));
	}

//METHODES SPECIFIQUES


}