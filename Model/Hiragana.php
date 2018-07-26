<?php

require_once('Framework/Model.php');

class Hiragana extends Model {

	//REND TOUS LES HIRAGANA
	public function getAllHira() {
		$sql = '
			SELECT *
			FROM hiragana
		';
		return $this->sqlRequest($sql);
	}

//ATTENTE

	/*
	//CHECK HIRAGANA EXISTANT
	public function checkHira($id) {
		$sql = '
			SELECT id
			FROM hiragana
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}
	*/

	/*
	//CONDITIONNEMENT HIRAGANA PAR GROUPE VOYELLE
	public function getVowelHira($filter) {
		$sql = '
			SELECT *
			FROM hiragana
			WHERE v_group = ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}
	*/

	/*
	//CONDITIONNEMENT HIRAGANA PAR GROUPE CONSONNE
	public function getConsonantHira($filter) {
		$sql = '
			SELECT *
			FROM hiragana
			WHERE c_group = ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}
	*/

	/*
	//REND 9 HIRAGANA ALEATOIRES
	public function getRandomHira() {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM hiragana
			ORDER BY RAND()
			LIMIT 9
		';
		return $this->sqlRequest($sql);
	}
	*/

}
