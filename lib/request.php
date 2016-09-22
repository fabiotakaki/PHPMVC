<?php

/**
* Classe Request
*/
class Request
{
	private $base_url = 'http://localhost:8080/';
	function __construct()
	{

	}

	public function base_url(){
		return $this->base_url;
	}
}
?>