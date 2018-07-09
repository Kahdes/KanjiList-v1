<?php

spl_autoload_register(function($class) {
	require_once($class . '.php');
});

class Router {

	//ETAPE 2
	public function processRequest() {
		try {
			//ETAPE 3
			$request = new Request(array_merge($_GET, $_POST));
			//ETAPE 4
			$controller = $this->createController($request);
			//ETAPE 8
			$action = $this->createAction($request);
			//ETAPE 11
			$controller->executeAction($action);
		} catch (Exception $e) {
			$this->error($e->getMessage(), "Frontend");
		}
	}

	//ETAPE 4
	private function createController(Request $request) {
		$controller = "Home";
		//ETAPE 5
		if ($request->isParameter('controller')) {
			//ETAPE 6
			$controller = $request->getParameter('controller');
			$controller = ucfirst(strtolower($controller));
		}

		$controllerClass = $controller . "Controller";
		$controllerFile = "Controller/" . $controllerClass. ".php";
		
		if (file_exists($controllerFile)) {
			require($controllerFile);
			$controller = new $controllerClass();
			//ETAPE 7
			$controller->setRequest($request);
			return $controller;
		} else {
			throw new Exception("Fichier '$controllerFile' introuvable");			
		}
	}

	//ETAPE 8
	private function createAction(Request $request) {
		$action = "index";
		//ETAPE 9
		if ($request->isParameter('action')) {
			//ETAPE 10
			$action = $request->getParameter('action');
		}
		return $action;
	}

	//SUCCES
	private function success($message) {
		$view = new View('success');
		$view->generate(array('msg' => $message));
	}

	//ERREUR
	private function error($message) {
		$view = new View('error');
		$view->generate(array('msg' => $message));
	}
	
}