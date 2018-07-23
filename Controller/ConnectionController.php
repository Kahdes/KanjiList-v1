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
			$this->redirect('Panel', 'index');
		} else {
			$this->generateView(array());
		}		
	}

	public function inscription() {
		$this->generateView(array());
	}

//METHODES SPECIFIQUES

	public function signIn() {
        if ($this->request->isParameter('sign-pseudo') && $this->request->isParameter('sign-pwd')) {
            $pseudo = $this->request->getParameter("sign-pseudo");
            $pwd = $this->requete->getParameter("sign-pwd");

            $this->client->setAccount($pseudo, $pwd);
            $this->accountHome($pseudo, $pwd);
        } else {        	
            throw new Exception();
        }
    }

	public function connect() {
        $pseudo = $this->request->getParameter("connect-id");
        $pwd = $this->request->getParameter("connect-pwd");
        if ($this->account->isAccount($pseudo)) {
          	$account = $this->account->isAccount($pseudo)->fetch();
           	if (password_verify($pwd, $account['p'])) {
           		$this->accountHome($pseudo, $pwd);
           	} else {
           		$this->redirect('Connection', 'index');
           	}                
        } else {            	
            $this->redirect('Connection', 'index');
        }
	}

	public function disconnect() {
		$this->request->getSession()->destroy();
		$this->redirect('Home');
	}

	private function accountHome($pseudo, $pwd) {
		$account = $this->account->getAccount()->fetch();
		$this->request->getSession()->setAttribute('pseudo', $account['pseudo']);
		$this->redirect('Panel', 'index');
	}
	
}