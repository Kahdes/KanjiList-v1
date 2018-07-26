<?php

require_once('Framework/Model.php');

class KanjiQCM extends Model {

	//CHECK LA REPONSE A UNE QUESTION
	public function checkAnswerQCM($id, $answer) {
		$sql = '
			SELECT id
			FROM kanji_qcm
			WHERE id = ?
			AND valid = ?
		';
		$params = array($id, $answer);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//REND UNE QUESTION ALEATOIRE
	public function getRandomQCM($limit) {
		$sql = '
			SELECT SQL_NO_CACHE *
			FROM kanji_qcm
			ORDER BY RAND()
			LIMIT ' . $limit . '
		';
		return $this->sqlRequest($sql);
	}

}
