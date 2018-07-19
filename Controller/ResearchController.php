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
			$col = 'kanji';
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
		if ($this->request->isParameter('research-m')) {
			$filter = $this->request->getParameter('research-m');
			if ($this->kanji->checkFilterMeaning($filter)) {
				$this->generateView(array(
					'list' => $this->kanji->getFilteredMeaning($filter)
				));
			} else {
				$this->generateView(array());
			}
		} else {
			$this->generateView(array());
		}
	}

	public function onyomi() {
		if ($this->request->isParameter('research-on')) {
			$filter = $this->request->getParameter('research-on');
			if ($this->kanji->checkFilterOn($filter)) {
				$this->generateView(array(
					'list' => $this->kanji->getFilteredOn($filter)
				));
			} else {
				$this->generateView(array());
			}
		} else {
			$this->generateView(array());
		}
	}

	public function kunyomi() {
		if ($this->request->isParameter('research-ku')) {
			$filter = $this->request->getParameter('research-ku');
			if ($this->kanji->checkFilterKun($filter)) {
				$this->generateView(array(
					'list' => $this->kanji->getFilteredKun($filter)
				));
			} else {
				$this->generateView(array());
			}
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

}