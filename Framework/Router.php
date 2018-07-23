<?php

spl_autoload_register(function($class) {
	require_once($class . '.php');
});

class Router {

	public function processRequest() {
		try {
			$request = new Request(array_merge($_GET, $_POST));
			$controller = $this->createController($request);
			$action = $this->createAction($request);
			$controller->executeAction($action);
		} catch (Exception $e) {
			$this->error($e->getMessage());
		}
	}

	private function createController(Request $request) {
		$controller = "Home";
		if ($request->isParameter('controller')) {
			$controller = $request->getParameter('controller');
			$controller = ucfirst(strtolower($controller));
		}		

		$controllerClass = $controller . "Controller";
		$controllerFile = "Controller/" . $controllerClass . ".php";
		
		if (file_exists($controllerFile)) {
			require($controllerFile);
			$controller = new $controllerClass();
			$controller->setRequest($request);
			return $controller;
		} else {
			echo 'OK4';
			throw new Exception("Fichier '$controllerFile' introuvable");
		}
	}

	private function createAction(Request $request) {
		$action = "index";
		if ($request->isParameter('action')) {
			$action = $request->getParameter('action');
		}
		return $action;
	}

	//GESTION ERREUR
	private function error($message) {
		$view = new View('error');
		$view->generate(array('msg' => $message));
	}
	
}