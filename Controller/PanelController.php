<?php

require_once('SecurityController.php');
require_once('Model/Kanji.php');
require_once('Model/Plist.php');

class PanelController extends SecurityController {

	private $kanji;
	private $pList;
	
	public function __construct() {
		$this->kanji = new Kanji();
		$this->pList = new Plist();
	}

//ACTIONS

	public function index() {
		$list = null;
		$pseudo = $this->pseudo;
		
		if ($this->pList->checkPseudo($pseudo)) {
			$list = $this->pList->getItemList($pseudo);
		}

		$this->generateView(array(
			'pseudo' => $pseudo,
			'list' => $list
		));
	}

//METHODES SPECIFIQUES

	public function addItem() {
		if ($this->request->isParameter('id')) {
			$id_kanji = $this->request->getParameter('id');	
			if ($this->kanji->checkKanji($id_kanji)) {
				$pseudo = $this->pseudo;
				var_dump($pseudo);
				$this->pList->setItem($pseudo, $id_kanji);
				$this->redirect('Panel', 'index');
			} else {
				$this->redirect('Home', 'index');
			}			
		}		
	}

}