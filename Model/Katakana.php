<?php

require_once('Framework/Model.php');

class Katakana extends Model {

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

	//TEST EN COURS
	public function getRandomKata() {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM katakana
			ORDER BY RAND()
			LIMIT 9
		';

		return $this->sqlRequest($sql);
	}

}