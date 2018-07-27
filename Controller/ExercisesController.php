<?php

require_once('SecurityController.php');
require_once('Model/Plist.php');
require_once('Model/Kanji.php');
require_once('Model/KanjiQCM.php');

//CLASSE CONTROLEUR POUR PAGES/ACTIONS D'EXERCICES
class ExercisesController extends SecurityController {

	private $plist;
	private $kanji;
	private $kanjiQCM;

	public function __construct() {
		$this->plist = new Plist();
		$this->kanji = new Kanji();
		$this->kanjiQCM = new KanjiQCM();
	}

//ACTIONS

    //PAGE EXERCICES PAR DEFAUT
	public function index() {
		$this->generateView(array());
	}

    //PAGE EXERCICE KANJI ALEATOIRE
	public function randomKanji() {
		$this->request->getSession()->unsetAttribute('answer');
		$limit = 1;
		$this->generateView(array(
			'question' => $this->kanjiQCM->getRandomQCM($limit)
		));
	}

    //PAGE RESULTAT EXERCICE
	public function result() {
		if (!$this->request->getSession()->isAttribute('answer')) {
			$this->request->getSession()->setAttribute('answer', 1);
			if ($this->request->isParameter('qcm-opt')) {
				$pseudo = $this->info['pseudo'];				
				$id = $this->request->getParameter('id');
				$answer = $this->request->getParameter('qcm-opt');
				$result = 0;
				if ($this->kanjiQCM->checkAnswerQCM($id, $answer)) {
					$result = 1;
				}
				//SI L'ITEM EST DEJA DANS LA LISTE			
				if ($this->plist->checkItem($pseudo, $id)) {
					$points = $this->plist->getPoint($pseudo, $id)->fetch()['state'];
					if ($points <= '100') {
						$this->plist->setPoint($pseudo, $id);
					}
				}
				$this->generateView(array(
					'result' => $result,
					'kanji' => $this->kanji->getInfoKanji($id)->fetch()['kanji'],
					'list' => $this->plist->checkItem($pseudo, $id),
					'id' => $id
				));
			} else {
				$this->redirect('Exercises', 'index');
			}
		} else {
			$this->redirect('Exercises', 'index');
		}		
	}

}