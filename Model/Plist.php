<?php

require_once('Framework/Model.php');

class Plist extends Model {

	//TEST SI UN KANJI EXISTE
	public function checkPseudo($pseudo) {
		$sql = '			
			SELECT *
			FROM plist
			WHERE pseudo = ?
		';
		$params = array($pseudo);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//TEST SI UN KANJI EXISTE
	public function checkItem($pseudo, $id_kanji) {
		$sql = '			
			SELECT *
			FROM plist
			WHERE pseudo = ?
			AND id_kanji = ?
		';
		$params = array($pseudo, $id_kanji);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//FILTERED GET 

	public function getItemList($pseudo) {
		$sql = '			
			SELECT *, plist.state
			FROM kanji
			RIGHT JOIN plist
			ON kanji.id = plist.id_kanji
			WHERE plist.pseudo = ?
			ORDER BY kanji.id
		';
		$params = array($pseudo);
		return $this->sqlRequest($sql, $params);
	}

	//REND TOUS LES KATAKANA
	public function setItem($pseudo, $id_kanji) {
		$sql = '
			INSERT INTO plist (pseudo, id_kanji, state)
			VALUES (?, ?, 0)
		';
		$params = array($pseudo, $id_kanji);
		return $this->sqlRequest($sql, $params);
	}
}