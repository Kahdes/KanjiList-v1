<?php

require_once('Framework/Model.php');

class Katakana extends Model {

	//REND TOUS LES KATAKANA
	public function getAllKata() {
		$sql = '
			SELECT *
			FROM katakana
		';
		return $this->sqlRequest($sql);
	}

//ATTENTE

	/*
	//CHECK KATAKANA EXISTANT
	public function checkKata($id) {
		$sql = '
			SELECT id
			FROM katakana
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}
	*/

	/*
	//CONDITIONNEMENT KATAKANA PAR GROUPE VOYELLE
	public function getVowelHira($filter) {
		$sql = '
			SELECT *
			FROM katakana
			WHERE v_group = ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}
	*/

	/*
	//CONDITIONNEMENT KATAKANA PAR GROUPE CONSONNE
	public function getConsonantHira($filter) {
		$sql = '
			SELECT *
			FROM katakana
			WHERE c_group = ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}
	*/

	/*
	//REND 9 HIRAGANA ALEATOIRES
	public function getRandomKata() {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM katakana
			ORDER BY RAND()
			LIMIT 9
		';
		return $this->sqlRequest($sql);
	}
	*/

}
