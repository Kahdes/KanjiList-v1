<?php

require_once('Framework/Model.php');

class Kanji extends Model {

	//CHECK KANJI EXISTANT
	public function checkKanji($id) {
		$sql = '
			SELECT id
			FROM kanjis
			WHERE id = ?
		';
		$params = array($id);
		return $this->check($this->sqlRequest($sql, $params));
	}

	public function getLastKanji() {
		$sql = '
			SELECT *
			FROM kanjis
			ORDER BY id DESC
			LIMIT 0,9
		';

		return $this->sqlRequest($sql);
	}

	public function getInfoKanji($id) {
		$sql = '
			SELECT *
			FROM kanjis
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}

	public function getKanji($id) {
		$sql = '
			SELECT kanji
			FROM kanjis
			WHERE id = ?
		';
		$params = array($id);

		return $this->sqlRequest($sql, $params);
	}

}