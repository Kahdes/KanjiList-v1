<?php

require_once('Framework/Controller.php');
require_once('Model/Account.php');

abstract class SecurityController extends Controller {

    protected $account;
	protected $pseudo;

    public function executeAction($action) {
        if ($this->request->getSession()->isAttribute('pseudo')) {
            $pseudo = $this->request->getSession()->getAttribute('pseudo');
            $this->account = new Account();
        	$this->pseudo = $this->account->getAccount($pseudo)->fetch()['pseudo'];
            parent::executeAction($action);
        }
        else {
            $this->redirect('Connection');
        }
    }

}