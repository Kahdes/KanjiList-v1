<?php

require_once('Framework/Model.php');

class Account extends Model {

	//CHECK COMPTE EXISTANT
	public function checkAccount($pseudo) {
		$sql = '
			SELECT id
			FROM account
			WHERE pseudo = :pseudo
		';
		$params = array(
			"pseudo" => $pseudo
		);
		return $this->check($this->sqlRequest($sql, $params));
	}

	//CHECK COMPTE EXISTANT
	public function getAccount($pseudo) {
		$sql = '
			SELECT id,
			       pseudo,
				   password AS p
			FROM account
			WHERE pseudo = ?
		';
		$params = array($pseudo);

		return $this->sqlRequest($sql, $params);
	}

	//CREATION DE COMPTE
	public function setAccount($pseudo, $password) {
		$sql = '
			INSERT INTO account (pseudo, password)
			VALUES (?, ?)
		';
		$params = array($pseudo, $password);
		return $this->sqlRequest($sql, $params);
	}

	public function connect($pseudo, $pwd) {
		$sql = '
			INSERT INTO account (pseudo, password)
			VALUES (?, ?, ?)
		';
		$params = array($acc_i, $pseudo, $password);
		return $this->sqlRequest($sql, $params);
	}

}