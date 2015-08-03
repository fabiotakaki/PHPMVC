<?php
/**
* Bootstrap Class para carregamento e tratamento dos arquivos
*/
class Bootstrap
{

	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$controller = ucfirst($url[0]).'Controller';

		if(empty($url[0])){
			require('controller/PaginaController.php');
			$page = new PaginaController();
			$page->index();
			return false;
		}

		$file = 'controller/'.$controller.'.php';

		if(file_exists($file)){
			require $file;
		}else{
			$this->view = new View();
			$this->view->render('error');
			return false;
		}

		$page = new $controller;

		if(isset($url[2])){
			$page->{$url[1]}($url[2]);
		}else{
			if(isset($url[1])){
				$page->{$url[1]}();
			}else{
				$page->index();
			}
		}
	}
}
?>