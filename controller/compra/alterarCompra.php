<!DOCTYPE html>
<html>
<head>
<title>P&V Store</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="../../js/jquery.min.js"></script>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href="../../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
 

<script src="../js/main.js"></script>
<script src="../js/simpleCart.min.js"> </script>
</head>


<body>
<!--header (duplicado em todas as páginas)-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="logo">
				<a href="pagInicial.php"><img src="../../images/logo.png" alt=""></a>	
			</div>
			<div class="header-left">		
				<ul>
					<?php
						session_start();
						if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
						   	unset($_SESSION['login']);
						   	unset($_SESSION['senha']);
						   	unset($_SESSION['user']);
						   	unset($_SESSION['nome']);
						   	session_destroy();
						   	header('location:pagInicial.php');
						}
						if(isset($_SESSION['login'])){
							if($_SESSION['user'] == 'admin'){
						  		echo '<li><a class="lock" href="crud.php">CRUD</a>';
						  	}
						  	//Icon made by https://www.flaticon.com/authors/smashicons from www.flaticon.com
						  	echo '<li><img src="../../images/user.png" style="padding-right: 10px;"><a class="lock">Bem-Vindo, '.$_SESSION['nome'].'</a><br>';
						  	echo '<a class="lock" href="?acao=sair" >Sair</a></li>';
						}
						else{
							echo '<li><a class="lock" href="login.php"><img src="../images/user.png" style="padding-right: 10px;">Entrar/Registrar</a></li>';
						}
						//$logado = $_SESSION['login'];
					?>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<div class="container">
		<div class="head-top">
			<div class="row">
				<div class="col-md-auto" style="text-align: center;">
					<h1>Editar compra</h1>
				</div>
			</div>
			<hr class="my-4" style="padding-bottom: 50px;">
			<div class="row justify-content-center" style="padding-bottom: 50px;">
				<div class="col-md-12">
				<?php
					require "../../persistence/db.php";

					$consulta = mysqli_query($conexao->getLink(), "SELECT * FROM Compra WHERE
								idCompra = '".$_POST['idCompra']."'");
					$view = mysqli_fetch_array($consulta);
					$nome = mysqli_query($conexao->getLink(), "SELECT nome FROM Pessoa, Compra WHERE
								Pessoa.id = Compra.Pessoa_id");
					$arrayNome = mysqli_fetch_array($nome);

					$produto = mysqli_query($conexao->getLink(), "SELECT nome, Produto.codProduto FROM Produto, Compra WHERE
								Produto.codProduto = Compra.codProduto");
					$arrayProduto = mysqli_fetch_array($produto);

					echo '<form action="salvarAlteracaoCompra.php" method="POST">';
					echo    '<div class="col-md-6 register-top-grid">';
					echo 	    '<div>';
					echo 		    '<span>ID da compra</span>';
					echo 		    '<input type="text" name="idCompra" value="'.$view['idCompra'].'">';
					echo 	    '</div>';
					echo 	    '<div>';
					echo 		    '<span>Data do Pedido</span>';
					echo 		    '<input type="text" name="dataPedido" value="'.$view['dataPedido'].'">';
					echo 	    '</div>';
					echo 	    '<div>';
                    echo 		    '<span>Pessoa que comprou:</span>';
					echo 		    '<input type="text" name="nome" value="'.$arrayNome['nome'].'">';
                    echo 	    '</div>';
                    echo 	    '<div>';
                    echo 		    '<span>ID da transportadora:</span>';
					echo 		    '<input type="text" name="idTransportadora" value="'.$view['idTransportadora'].'">';
					echo 	    '</div>';
					echo 	    '<div>';
                    echo 		    '<span>Codigo do produto:</span>';
                    echo 		    '<input type="text" name="codProduto" value="'.$arrayProduto['codProduto'].'">';
                    echo 		    '<span>Nome do produto: (Não editável)</span>';
					echo 		    '<input type="text" name="nomeProduto" value="'.$arrayProduto['nome'].'"readonly>';
					echo 	    '</div>';
					echo    '</div>';
					echo 	'<div class="col-md-8 register-bottom-grid">';
                    echo 		'<input type="submit" value="Editar">';
                	echo 	'</div>';
					echo '</form>';
				?>
				</div>
			</div>
			<hr class="my-4">
			<a href="../../view/viewCompra.php" style="color: black;">
				Voltar
			</a>
			<div style="padding-top: 50px;"></div>
		</div>
	</div>
</div>
<!--fim do header-->

	

			
<!--Rodapé (duplicado em todas páginas)-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-4 amet-sed">
				<h4>INFORMAÇÕES</h4>
				<ul class="nav-bottom">
					<li><a href="#">Como comprar</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="contact.php">Localização</a></li>
					<li><a href="#">Entrega</a></li>
					<li><a href="#">Trabalhe conosco</a></li>	
				</ul>	
			</div>
			<div class="col-md-4 amet-sed ">
				<h4>CONTATO</h4>
				<p>pevstore@ecommerce.com</p>
				<p>telefone: +55 35 3XXX-XXXX</p>
				<ul class="social">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="twitter"> </i></a></li>
					<li><a href="#"><i class="rss"> </i></a></li>
					<li><a href="#"><i class="gmail"> </i></a></li>
				</ul>
			</div>
			<div class="col-md-4 amet-sed">
				<h4>Novidades</h4>
				<p>Inscreva-se para receber notícias e promoções</p>
				<form>
					<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="Inscrever">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--fim do rodapé-->
</body>
</html>
