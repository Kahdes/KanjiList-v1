<?php

spl_autoload_register(function($class) {
	require_once($class . '.php');
});

class Router {

	public function __construct() {	
	}			

	public function request() {
		try {
			
		} catch (Exception $e) {
			echo 'Erreur : ' . $e->getMessage();
		}
	}	
	
}