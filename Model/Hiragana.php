<?php

require_once('Framework/Model.php');

class Hiragana extends Model {

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

	//TEST EN COURS
	public function getRandomHira() {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM hiragana
			ORDER BY RAND()
			LIMIT 9
		';

		return $this->sqlRequest($sql);
	}

}