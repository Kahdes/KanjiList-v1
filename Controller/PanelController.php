<?php

require_once('SecurityController.php');
require_once('Model/Kanji.php');
require_once('Model/Plist.php');

//CLASSE CONTROLEUR POUR PAGES/ACTIONS DE TABLEAU DE BORD
class PanelController extends SecurityController {

	private $kanji;
	private $pList;

	public function __construct() {
		$this->kanji = new Kanji();
		$this->pList = new Plist();
	}

//ACTIONS

	//PAGE TABLEAU DE BORD PAR DEFAUT
	public function index() {
		$pseudo = $this->pseudo;
		$list = null;
		if ($this->pList->checkPseudo($pseudo)) {
			$list = $this->pList->getItemList($pseudo);
		}

		$this->generateView(array(
			'pseudo' => $pseudo,
			'list' => $list
		));
	}

//METHODES SPECIFIQUES

	//PAGE TABLEAU DE BORD
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
