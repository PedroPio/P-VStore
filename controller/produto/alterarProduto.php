<?php
	require "../../model/db.php";

	include_once("../persistence/conexao.php");
	include_once("../persistence/produtoDAO.php");
	
	$conexao = new Connection("localhost","root","","pevstore");
	$conexao->conectar();
	
	$clientedao = new ProdutoDao();
	$resultado = $clientedao->consultar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);
	
	echo '<form action="../controller/salvarAlteracaoProduto.php" method="POST">';
	echo 'Codigo: <input type="text" name="codigo" value="'.($linha[0]).'" readonly/><br />';
	echo 'Nome: <input type="text" name="nome" value="'.($linha[1]).'"/><br />';
	echo 'Data de Nascimento: <input type="text" name="nascimento" value="'.($linha[2]).'" /><br />';
	echo 'Salario: <input type="text" name="salario" value="'.($linha[3]).'" /><br />';
	echo '<input type="submit" name="salvar" />';
	echo '<input type="reset" name="limpar" /><br />';
	echo '</form>';

	echo "<br /><a href=\"../view/consultarCliente.html\">VOLTAR</a>";
?>