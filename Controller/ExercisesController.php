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
		$limit = 1;
		$this->generateView(array(
			'question' => $this->kanjiQCM->getRandomQCM($limit)
		));
	}

    //PAGE RESULTAT EXERCICE
	public function result() {
		if ($this->request->isParameter('qcm-opt')) {
			$id = $this->request->getParameter('id');
			$answer = $this->request->getParameter('qcm-opt');
			$result = 0;
			if ($this->kanjiQCM->checkAnswerQCM($id, $answer)) {
				$result = 1;
			}
			$this->generateView(array(
				'result' => $result,
				'kanji' => $this->kanji->getInfoKanji($id)->fetch()['kanji'],
				'list' => $this->plist->checkItem($this->pseudo, $id),
				'id' => $id
			));
		} else {
			$this->redirect('Exercises', 'index');
		}
	}

}