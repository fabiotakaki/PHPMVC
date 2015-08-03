<?php
/**
* Controller Principal
*/
class Controller
{

	function __construct()
	{
		$this->view = new View();
	}

	public function loadModel($name, $args = false){
		$path 	= 'model/'.ucfirst($name).'Model.php';
		$model 	= ucfirst($name).'Model';
		if(file_exists($path)){
			require $path;
		}
		if($args == false) $this->$model = new $model();
	}
}
?>