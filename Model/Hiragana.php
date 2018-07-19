<?php

require_once('Framework/Model.php');

class Hiragana extends Model {

//CHECK

	//TEST HIRAGANA EXISTANT
	public function checkHira($id) {
		$sql = '
			SELECT id
			FROM hiragana
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}

//FILTERED GET

	/*
	//CONDITIONNEMENT PAR GROUPE VOYELLE
	public function getFilteredHira($filter) {
		$sql = '
			SELECT *
			FROM hiragana
			WHERE v_group = ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}
	*/

//BASIC GET

	//REND TOUS LES HIRAGANA
	public function getAllHira() {
		$sql = '
			SELECT *
			FROM hiragana
		';

		return $this->sqlRequest($sql);
	}

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