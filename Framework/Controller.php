<?php

spl_autoload_register(function($class) {
	require_once($class . '.php');
});

abstract class Controller {

	private $action;
	protected $request;

	//ETAPE 7
	public function setRequest(Request $request) {
		$this->request = $request;
	}

	//ETAPE 11
	public function executeAction($action) {
		if (method_exists($this, $action)) {
			$this->action = $action;
			$this->{$this->action} ();
		} else {
			//ETAPE 12
			$controllerClass = get_class($this);
			throw new Exception("Action '$action' non définie dans la classe $controllerClass");			
		}
	}

	//ETAPE 13
	protected function generateView($dataView = array()) {
		$controllerClass = get_class($this);
		$controller = str_replace("Controller", "", $controllerClass);
		$view = new View($this->action, $controller);
		$view->generate($dataView);
	}

	public abstract function index();
		
}