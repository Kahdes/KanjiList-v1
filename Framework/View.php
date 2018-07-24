<?php

class View {

	private $file;
	private $title;
	private $description;

	public function __construct($action, $controller = "") {
		$file = "View/";
		if ($controller !== "") {
			$file = $file . $controller . "/";
		}
		$this->file = $file . $action . ".php";
	}

	public function generate($data) {
		$content = $this->generateFile($this->file, $data);
		$root = Configuration::get('root', '/');
		$view = $this->generateFile('View/template.php',
		array(
			'title' => $this->title,
			'description' => $this->description,
		 	'content' => $content,
		 	'root' => $root
		));
		echo $view;
	}

	private function generateFile($file, $data) {
		if (file_exists($file)) {
		    extract($data);
		    ob_start();
		    require($file);
		    return ob_get_clean();
		} else {
		    throw new Exception("Fichier '$file' introuvable");
		}
	}

	private function clearContent($value) {
		return htmlspecialchars($value, ENT_QUOTES, 'utf-8', false);
	}
	
}