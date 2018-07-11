<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ResearchController extends Controller {

	private $kanji;
	
	public function __construct() {
		$this->kanji = new Kanji();
	}

	public function index() {
		$this->generateView(array());	
	}

	public function kanji() {
		$id = $this->request->getParameter('id');
		if ($this->kanji->getInfoKanji($id)) {
			$title = $this->kanji->getKanji($id)->fetch();
			$this->generateView(array(
				'title' => $title,
				'kanji' => $this->kanji->getInfoKanji($id)
			));
		} else {
			$this->error("Ce kanji est inconnu.");
		}		
	}

}