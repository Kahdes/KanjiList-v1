<?php

require_once('Framework/Model.php');

class Kanji extends Model {

	//CHECK KANJI EXISTANT
	public function checkKanji($id) {
		$sql = '
			SELECT id
			FROM kanji
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}

	public function checkFilterKanji($filter) {
		$sql = '
			SELECT id
			FROM kanji
			WHERE kanji REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

	public function checkFilterMeaning($filter) {
		$sql = '
			SELECT id
			FROM kanji
			WHERE meaning REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

	public function checkFilterOn($filter) {
		$sql = '
			SELECT id
			FROM kanji
			WHERE chinese REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

	public function checkFilterKun($filter) {
		$sql = '
			SELECT id
			FROM kanji
			WHERE japanese REGEXP ?
		';
		$params = array($filter);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//TEST EN COURS
	public function getFilteredKanji($filter) {
		$sql = '
			SELECT *
			FROM kanji
			WHERE kanji REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

	//TEST EN COURS
	public function getFilteredMeaning($filter) {
		$sql = '
			SELECT *
			FROM kanji
			WHERE meaning REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

	//TEST EN COURS
	public function getFilteredOn($filter) {
		$sql = '
			SELECT *
			FROM kanji
			WHERE chinese REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

	//TEST EN COURS
	public function getFilteredKun($filter) {
		$sql = '
			SELECT *
			FROM kanji
			WHERE japanese REGEXP ?
		';
		$params = array($filter);
		return $this->sqlRequest($sql, $params);
	}

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
		$sql = '
			SELECT *
			FROM kanji
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}

	//REND LE SIGNE D'UN KANJI
	public function getSignKanji($id) {
		$sql = '
			SELECT kanji
			FROM kanji
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}

	/*
	public function getLastKanji() {
		$sql = '
			SELECT *
			FROM kanji
			ORDER BY id DESC
			LIMIT 0,9
		';

		return $this->sqlRequest($sql);
	}
	*/

}