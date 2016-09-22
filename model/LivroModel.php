<?php
/**
* Livro Model
*/
class LivroModel extends Model
{
	function __construct()
	{
		# code...
	}
	public function adicionar(){
		$conexao = new Conexao('localhost', 'root', '', 'aula_cliente'); //cria um objeto do tipo conexão
		$conexao->conectar(); // estabelece conexão
		$nome 	= $this->nome; //recupera nome
		$fone 	= $this->telefone; //recupera fone
		$rua 	= 	$this->rua; //recupera rua
		//cria a instrução SQL
		$sql = "insert into cliente(nome,telefone,rua) values('$nome','$fone','$rua')";
		//executa o sql
		mysql_query($sql) or die ('Erro ao Inserir cliente!!!');
		$conexao->desconectar();
	}

	public function deletar($id){
		$conexao = new Conexao('localhost', 'root', '', 'aula_cliente'); //cria um objeto do tipo conexão
		$conexao->conectar(); // estabelece conexão
		$sql = "DELETE FROM cliente WHERE id = ".$id;
		$data = mysql_query($sql) or die("Erro ao buscar os dados. - ".mysql_error());
		$conexao->desconectar();
	}

	public function exibir(){
		$conexao = new Conexao('localhost', 'root', '', 'aula_cliente'); //cria um objeto do tipo conexão
		$conexao->conectar(); // estabelece conexão
		$sql = "SELECT * FROM cliente";
		$data = mysql_query($sql) or die("Erro ao buscar os dados. - ".mysql_error());
		while($show = mysql_fetch_array($data)){
			$rows[] = $show;
		}
		$conexao->desconectar();
		return $rows;
	}

	public function busca($id){
		$conexao = new Conexao('localhost', 'root', '', 'aula_cliente'); //cria um objeto do tipo conexão
		$conexao->conectar(); // estabelece conexão
		$sql = "SELECT * FROM cliente WHERE id = ".$id;
		$data = mysql_query($sql) or die("Erro ao buscar os dados. - ".mysql_error());
		$show = mysql_fetch_array($data);
		if(mysql_num_rows($data) > 0){
			$conexao->desconectar();
			return $show;
		}
	}

	function editar($id, $nome, $telefone, $rua){
		$conexao = new Conexao('localhost', 'root', '', 'aula_cliente'); //cria um objeto do tipo conexão
		$conexao->conectar(); // estabelece conexão
		$sql = "UPDATE cliente SET nome = '".$nome."', telefone = '".$telefone."', rua = '".$rua."' WHERE id = ".$id;
		$data = mysql_query($sql) or die("Erro ao buscar os dados. - ".mysql_error());
		$conexao->desconectar();
	}
}

?>