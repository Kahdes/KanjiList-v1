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
		if ($this->request->isParameter('research-k')) {
			$filter = $this->request->getParameter('research-k');
			if ($this->kanji->checkFilterKanji($filter)) {
				$this->generateView(array(
					'list' => $this->kanji->getFilteredKanji($filter)
				));
			} else {
				$this->generateView(array());
			}
		} else {
			$this->generateView(array());
		}		
	}

	public function meaning() {
		$this->generateView(array());
	}

	public function onyomi() {
		$this->generateView(array());
	}

	public function kunyomi() {
		$this->generateView(array());
	}

	public function result() {	
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