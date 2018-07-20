<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ExercisesController extends Controller {
	
	public function __construct() {
	}

//ACTIONS

	public function index() {
		$this->generateView(array());
	}

}