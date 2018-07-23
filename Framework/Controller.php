<?php

spl_autoload_register(function($class) {
	require_once($class . '.php');
});

abstract class Controller {

	private $action;
	protected $request;

	public function setRequest(Request $request) {
		$this->request = $request;		
	}

	public function executeAction($action) {
		if (method_exists($this, $action)) {
			$this->action = $action;
			$this->{$this->action} ();
		} else {
			$controllerClass = get_class($this);
			echo 'OK1';
			throw new Exception("Action '$action' non définie dans la classe $controllerClass");					
		}
	}

	protected function generateView($dataView = array()) {
		$controllerClass = get_class($this);
		$controller = str_replace("Controller", "", $controllerClass);
		$view = new View($this->action, $controller);
		$view->generate($dataView);
	}

	protected function redirect($controller, $action = null) {
        $root = Configuration::get('root', '/');
        header('Location:' . $root . $controller . '/' . $action);
    }
	
	public abstract function index();
		
}