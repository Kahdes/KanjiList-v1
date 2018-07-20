<?php

require_once('Framework/Model.php');

class Account extends Model {

	//CHECK COMPTE EXISTANT
	public function isAccount($pseudo) {
		$sql = '
			SELECT password AS p
			FROM account
			WHERE pseudo = :pseudo
		';
		$params = array(
			"pseudo" => $pseudo
		);
		return $this->sqlRequest($sql, $params);
	}

	//CHECK COMPTE EXISTANT
	public function getAccount() {
		$sql = '
			SELECT id,
			       pseudo,
				   password AS p,
				   account_identifier AS ac
			FROM account
		';
		return $this->sqlRequest($sql);
	}

	//CREATION DE COMPTE
	public function setAccount($acc_i, $pseudo, $password) {
		$sql = '
			INSERT INTO account (account_identifier, pseudo, password, NOW())
			VALUES (?, ?, ?)
		';
		$params = array($acc_i, $pseudo, $password);
		return $this->sqlRequest($sql, $params);
	}

	public function connect($pseudo, $pwd) {
		$sql = '
			INSERT INTO account (account_identifier, pseudo, password, NOW())
			VALUES (?, ?, ?)
		';
		$params = array($acc_i, $pseudo, $password);
		return $this->sqlRequest($sql, $params);
	}



}