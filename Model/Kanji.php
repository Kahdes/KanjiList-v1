<?php

require_once('Framework/Model.php');

class Kanji extends Model {

	private $basicSql = 'SELECT id FROM kanji';
	private $selectAllSql = 'SELECT * FROM kanji';

//CHECK

	//TEST SI UN KANJI EXISTE
	public function checkKanji($id) {
		$sql = $this->basicSql . '			
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//COMPARAISON SUR KANJI
	public function checkFilter($col, $filter) {
		$sql = $this->basicSql . '
			WHERE ' . $col . ' REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

//FILTERED GET 

	public function getFiltered($col, $filter) {
		$sql = $this->selectAllSql . '
			WHERE ' . $col . ' REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

//BASIC GET 

	//REND 9 KANJI ALEATOIRES
	public function getRandomKanji() {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM kanji
			ORDER BY RAND()
			LIMIT 6
		';

		return $this->sqlRequest($sql);
	}

	//REND LES INFOS COMPLETES D'UN KANJI
	public function getInfoKanji($id) {
		$sql = $this->selectAllSql . '
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}

//ATTENTE

	/*
	//REND LE SIGNE D'UN KANJI
	public function getSignKanji($id) {
		$sql = $this->basicSql . '
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}
	*/

	/*
	//A VOIR POUR UN COMPTE SUR LE SITE
	public function getLastKanji() {
		$sql = $this->selectAllSql . '
			ORDER BY id DESC
			LIMIT 0,9
		';

		return $this->sqlRequest($sql);
	}
	*/

}