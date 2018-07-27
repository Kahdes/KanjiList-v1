<?php

require_once('Framework/Model.php');

class Kanji extends Model {

	//REQUETES SQL REUTILISABLES
	private $basicSql = 'SELECT id FROM kanji';
	private $selectAllSql = 'SELECT * FROM kanji';

	//CHECK EXISTANCE KANJI
	public function checkKanji($id) {
		$sql = $this->basicSql . '
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//CHECK RESULTAT SELON $col & REGEXP
	public function checkFilter($col, $filter) {
		$sql = $this->basicSql . '
			WHERE ' . $col . ' REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//REND UNE LISTE DE CORRESPONDANCE SELON $col & REGEXP
	public function getCountFiltered($col, $filter) {
		$sql = '
			SELECT COUNT(*)
			FROM kanji
			WHERE ' . $col . ' REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

	//REND UNE LISTE DE CORRESPONDANCE SELON $col & REGEXP
	public function getFiltered($col, $filter) {
		$sql = $this->selectAllSql . '
			WHERE ' . $col . ' REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

	//REND UN NOMBRE DE KANJI ALEATOIRES
	public function getRandomKanji($limit) {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM kanji
			ORDER BY RAND()
			LIMIT ' . $limit . '
		';
		return $this->sqlRequest($sql);
	}

	//REND LES INFOS COMPLETES D'UN KANJI SELON UN ID
	public function getInfoKanji($id) {
		$sql = $this->selectAllSql . '
			WHERE id = ?
		';
		$params = array($id);
		return $this->sqlRequest($sql, $params);
	}

//ATTENTE

	/*
	public function getFromOnyomi($reading) {
		$sql = $this->selectAllSql . '
			WHERE chinese = ?
		';
		$params = array($reading);
		return $this->sqlRequest($sql, $params);
	}

	public function getFromKunyomi($reading) {
		$sql = $this->selectAllSql . '
			WHERE japanese = ?
		';
		$params = array($reading);
		return $this->sqlRequest($sql, $params);
	}

	public function getFromMeaning($meaning) {
		$sql = $this->selectAllSql . '
			WHERE meaning = ?
		';
		$params = array($reading);
		return $this->sqlRequest($sql, $params);
	}
	*/

}
