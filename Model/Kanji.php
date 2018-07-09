<?php

require_once('Framework/Model.php');

class Kanji extends Model {

	public function getAddList() {
		$sql = '
			SELECT *
			FROM kanjis
			ORDER BY id DESC
			LIMIT 0,5
		';

		return $this->sqlRequest($sql);
	}

}