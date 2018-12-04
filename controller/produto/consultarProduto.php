<?php
	require "../../model/db.php";

	include_once("../persistence/Connection.php");
	include_once("../persistence/ClienteDAO.php");
	
	$conexao = new Connection("localhost","root","","teste");
	$conexao->conectar();
	
	$clientedao = new ClienteDao();
	$resultado = $clientedao->consultar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);
	
	echo "<head>";
	echo "<style>";
	echo "th, td, tr {border: 1px solid black;}";
	echo "th {background-color: rgba(0,0,0,0.3);}";
	echo "</style>";
	echo "</head>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Codigo</th>";
	echo "<th>Nome</th>";
	echo "<th>Nascimento</th>";
	echo "<th>Salario</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".($linha[0])."</td>";
	echo "<td>".($linha[1])."</td>";
	echo "<td>".($linha[2])."</td>";
	echo "<td>".($linha[3])."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<br /><a href=\"../view/consultarCliente.html\">VOLTAR</a>";
?>