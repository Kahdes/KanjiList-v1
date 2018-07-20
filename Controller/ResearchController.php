<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');

class ResearchController extends Controller {

	private $kanji;
	
	public function __construct() {
		$this->kanji = new Kanji();
	}

//ACTIONS

	public function index() {
		$this->generateView(array());	
	}

	public function kanji() {
		if ($this->request->isParameter('research-k')) {
			$filter = $this->request->getParameter('research-k');
			$this->filter($filter, 'Kanji');
		} else {
			$this->generateView(array());
		}
	}

	public function meaning() {
		if ($this->request->isParameter('research-m')) {
			$filter = $this->request->getParameter('research-m');
			$this->filter($filter, 'Meaning');
		} else {
			$this->generateView(array());
		}
	}

	public function onyomi() {
		if ($this->request->isParameter('research-on')) {
			$filter = $this->request->getParameter('research-on');
			$this->filter($filter, 'On');
		} else {
			$this->generateView(array());
		}
	}

	public function kunyomi() {
		if ($this->request->isParameter('research-ku')) {
			$filter = $this->request->getParameter('research-ku');
			$this->filter($filter, 'Kun');
		} else {
			$this->generateView(array());
		}
	}

	public function result() {	
		if ($this->request->isParameter('id')) {
			$id = $this->request->getParameter('id');
			if ($this->kanji->checkKanji($id)) {
				$filter = $this->kanji->getInfoKanji($id)->fetch();
				if (preg_match('/(\(\d\))/', $filter['kanji'])) {
					$filter['kanji'] = preg_replace('/\(\d\)/', '', $filter['kanji']);
				}
				$this->generateView(array(
					'title' => $this->kanji->getInfoKanji($id)->fetch(),
					'kanji' => $this->kanji->getInfoKanji($id),
					'affiliate' => $this->kanji->getFilteredKanji($filter['kanji'])
				));
			} else {
				throw new Exception();				
			}
		} else {
			throw new Exception();
		}		
	}

//METHODES SPECIFIQUES

	private function filter($filter, $method) {
		$f_method = "checkFilter$method";
		$g_method = "getFiltered$method";
		if ($this->kanji->$f_method($filter)) {
			$this->generateView(array(
				'list' => $this->kanji->$g_method($filter)
			));
		} else {
			$this->generateView(array(
				'result' => 'Aucun résultat'
			));
		}
	}

}