<?php

require_once('Framework/Controller.php');
require_once('Model/Account.php');

//CLASSE CONTROLEUR ABSTRAITE POUR PAGES SECURISEES
abstract class SecurityController extends Controller {

    protected $account;
	protected $pseudo;

    //ANALYSE DE SESSION ET RENVOI D'ACTION CLASSIQUE / REDIRECTION
    public function executeAction($action) {
        if ($this->request->getSession()->isAttribute('pseudo')) {
            $this->account = new Account();
            $pseudo = $this->request->getSession()->getAttribute('pseudo');
        	$this->pseudo = $this->account->getAccount($pseudo)->fetch()['pseudo'];
            parent::executeAction($action);
        }
        else {
            $this->redirect('Connection');
        }
    }

}
