<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

//CLASSE CONTROLEUR POUR PAGES/ACTIONS D'ACCUEIL
class HomeController extends Controller {

	private $kanji;

	public function __construct() {
		$this->kanji = new Kanji();
	}

//ACTIONS

    //PAGE D'ACCUEIL PAR DEFAUT
	public function index() {
        $limit = 6;
		$this->generateView(array(
			'random' => $this->kanji->getRandomKanji($limit)
		));
	}

}
