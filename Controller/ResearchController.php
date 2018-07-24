<?php

require_once('Framework/Controller.php');
require_once('Model/Kanji.php');
require_once('Model/Plist.php');

class ResearchController extends Controller {

	private $kanji;
	private $pList;
	
	public function __construct() {
		$this->kanji = new Kanji();
		$this->pList = new Plist();
	}

//ACTIONS

	public function index() {
		$this->generateView(array());	
	}

	public function kanji() {
		$this->filter('kanji', 'research-k', 'Kanji');
	}

	public function meaning() {
		$this->filter('meaning', 'research-m', 'Meaning');
	}

	public function onyomi() {
		$this->filter('chinese', 'research-on','Onyomi');
	}

	public function kunyomi() {
		$this->filter('japanese', 'research-ku','Kunyomi');
	}

	public function result() {	
		if ($this->request->isParameter('id')) {
			$id = $this->request->getParameter('id');
			if ($this->kanji->checkKanji($id)) {
				$filter = $this->kanji->getInfoKanji($id)->fetch();
				$account = null;
				if ($this->request->getSession()->isAttribute('pseudo')) {
					$account_name = $this->request->getSession()->getAttribute('pseudo');
					if ($this->pList->checkItem($account_name, $id)) {
						$account = 2;
					} else {
						$account = 1;
					}
				}
				$this->generateView(array(
					'title' => $this->kanji->getInfoKanji($id)->fetch(),
					'kanji' => $this->kanji->getInfoKanji($id),
					'account' => $account
				));
			} else {
				$this->redirect('Research', 'index');			
			}
		} else {
			$this->redirect('Research', 'index');
		}		
	}

//METHODES SPECIFIQUES

	private function filter($col, $research, $method) {
		//$this->save();
		if ($this->request->isParameter($research)) {
			$filter = $this->request->getParameter($research);
			if ($this->kanji->checkFilter($col, $filter)) {
				$this->generateView(array(
					'list' => $this->kanji->getFiltered($col, $filter)
				));
			} else {
				$this->generateView(array(
					'result' => 'Aucun résultat'
				));
			}
		} else {
			$this->generateView(array());
		}		
	}

	/*
	FONCTION DE SAUVEGARDE DE RECHERCHE
	private function save() {
		if (!empty($_POST)) {
			$_SESSION['save'] = $_POST;

			$actualFile = $_SERVER['PHP_SELF'];
			$actualFile = str_replace('index.php', '', $actualFile);

			if (!empty($_SERVER['QUERY_STRING'])) {
				$q_string = $_SERVER['QUERY_STRING'];
				$q_string = str_replace('&', '/', $q_string);
				$q_string = str_replace('=', '', $q_string);
				$q_string = str_replace('controller', '', $q_string);
				$q_string = str_replace('action', '', $q_string);
				$q_string = str_replace('id', '', $q_string);

				$actualFile .=  $q_string;
			}

			header('Location: ' . $actualFile);
			exit;
		}
		if (isset($_SESSION['save'])) {
			$_POST = $_SESSION['save'];
		}
	}
	*/

}