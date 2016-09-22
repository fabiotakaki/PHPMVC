<?php
/**
* Controller Database
*/
class Conexao
{
	private $host;
	private $user;
	private $password;
	private $database;
	private $connection;

	function __construct($host, $user, $password, $database){
		$this->host 	= $host;
		$this->user 	= $user;
		$this->password = $password;
		$this->database = $database;
	}

	public function conectar(){
		$this->connection = mysql_connect($this->host, $this->user, $this->password)
		or die("Erro na conexão - ".mysql_error()."<br>");

		mysql_select_db($this->database)
		or die("Erro ao selecionar base de dados - ".mysql_error()."<br>");

		return true;
	}

	public function desconectar(){
		mysql_close($this->connection);
	}
}
?>