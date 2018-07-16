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
		if ($this->kanji->checkKanji($id)) {
			$this->generateView(array(
				'title' => $this->kanji->getInfoKanji($id)->fetch(),
				'kanji' => $this->kanji->getInfoKanji($id)
			));
		} else {
			throw new Exception("Ce kanji est inconnu.");
		}		
	}

}