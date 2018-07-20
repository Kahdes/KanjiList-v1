<?php

require_once('Framework/Controller.php');
require_once('Model/Account.php');

class ConnectionController extends Controller {

	private $account;
	
	public function __construct() {
		$this->account = new Account();
	}

//ACTIONS

	public function index() {
		if ($this->request->getSession()->isAttribute('pseudo')) {
			$this->redirect('Home');
		} else {
			$this->generateView(array());
		}		
	}

	public function error($title, $msg) {

	}

//METHODES SPECIFIQUES

	public function connect() {
        $pseudo = $this->request->getParameter("connect-id");
        $pwd = $this->request->getParameter("connect-pwd");
        if ($this->account->isAccount($pseudo)) {
          	$account = $this->account->isAccount($pseudo)->fetch();
           	if (password_verify($pwd, $account['p'])) {
           		$this->accountHome($pseudo, $pwd);
           	} else {
           		throw new Exception();
           	}                
        } else {            	
            throw new Exception();
        }
	}

	public function disconnect() {
		$this->request->getSession()->destroy();
		$this->redirect('Home');
	}

	private function accountHome($pseudo, $pwd) {
		$account = $this->account->getAccount()->fetch();
		$this->request->getSession()->setAttribute('pseudo', $account['pseudo']);
		$this->redirect('Home');
	}
	
}