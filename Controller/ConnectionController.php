<?php

require_once('Framework/Controller.php');
require_once('Model/Account.php');

//CLASSE CONTROLEUR POUR PAGES/ACTIONS DE CONNECTION/INSCRIPTION
class ConnectionController extends Controller {

	private $account;

	public function __construct() {
		$this->account = new Account();
	}

//ACTIONS

	//PAGE DE CONNECTION
	public function index() {
		if ($this->request->getSession()->isAttribute('pseudo')) {
			$this->redirect('Panel', 'index');
		} else {
			$this->generateView(array());
		}
	}

	//PAGE D'INSCRIPTION
	public function inscription() {
		if ($this->request->getSession()->isAttribute('pseudo')) {
			$this->redirect('Panel', 'index');
		} else {
			$this->generateView(array());
		}
	}

	//PAGE D'ERREUR (COMPTE INCONNU)
	public function error() {
		$this->generateView(array());
	}

//METHODES SPECIFIQUES

	//CREE UN NOUVEAU COMPTE UTILISATEUR
	public function signIn() {
        if ($this->request->isParameter('sign-pseudo') && $this->request->isParameter('sign-pwd')) {
            $pseudo = $this->request->getParameter("sign-pseudo");
            if ($this->account->checkAccount($pseudo)) {
	          	$this->redirect('Connection', 'inscription');
	        } else {
	        	$pwd = $this->request->getParameter("sign-pwd");
            	$pwd = password_hash($pwd, PASSWORD_DEFAULT);

	            $this->account->setAccount($pseudo, $pwd);
            	$this->accountHome($pseudo, $pwd);
	        }
        } else {
            $this->redirect('Connection', 'inscription');
        }
    }

	//CONNECTE UN COMPTE UNTILISATEUR EXISTANT    
	public function connect() {
        $pseudo = $this->request->getParameter("connect-id");
        $pwd = $this->request->getParameter("connect-pwd");
        if ($this->account->checkAccount($pseudo)) {
          	$account = $this->account->getAccount($pseudo)->fetch();
           	if (password_verify($pwd, $account['p'])) {
           		$this->account->setLastConnection($pseudo);
           		$this->accountHome($pseudo, $pwd);
           	} else {
           		$this->redirect('Connection', 'error');
           	}
        } else {
            $this->redirect('Connection', 'error');
        }
	}

	//DECONNECTE LE COMPTE ACTUEL
	public function disconnect() {
		$this->request->getSession()->destroy();
		$this->redirect('Home');
	}

	//REDIRIGE VERS LE TABLEAU DE BORD APRES CONNECTION/INSCRIPTION
	private function accountHome($pseudo, $pwd) {
		$account = $this->account->getAccount($pseudo)->fetch();
		$this->request->getSession()->setAttribute('pseudo', $account['pseudo']);
		$this->redirect('Panel', 'index');
	}

}
