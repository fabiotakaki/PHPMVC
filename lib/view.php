<?php
/**
* Classe view
*/
class View
{

	function __construct()
	{
		$this->request = new Request();
	}

	public function render($name){
		require 'view/template/header.php';
		require 'view/'.$name.'.php';
		require 'view/template/footer.php';
	}
}
?>