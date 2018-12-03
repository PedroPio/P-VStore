<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  //header('location:login.php');
  }
 
$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
<head>
<title>P&V Store</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="../js/jquery.min.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href="../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/memenu.js"></script>
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
				<a href="pagInicial.php"><img src="../images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
</div>
<!--fim do header-->

	
<!--Registro-->
<div class="container">
	<div class="register">
		<form action="../controller/produto/cadastrarProduto.php" method="POST">
			<h1>Registro de Produto</h1><br>
			<div class="col-md-12 register-top-grid">
				<h3>Informações do Produto</h3><br>
			</div>
			<div class="col-md-6 register-top-grid">
				<div>
					<span>Nome</span>
					<input type="text" name="nome" id="nome" required> 
				</div>
				<div>
					<span>Marca</span>
				<input type="text" name="marca" required> 
				</div>
				<div>
					<span>Fornecedor</span>
					<input type="text" name="fornecedor" required> 
				</div>
				<div>
					<span>Descricao</span>
					<input type="text" name="descricao" required> 
				</div>
				<div>
					<span>Preço de compra</span>
					<input type="text" name="precoCompra" required> 
				</div>
				<div>
					<span>Preço de venda</span>
					<input type="text" name="precoVenda" required> 
				</div>
				<div>
					<span>Quantidade</span>
					<input type="number" name="quantidade" min="1" required> 
				</div>
				<div class="col-md register-bottom-grid">
					<input type="submit" value="Registrar"><br><br>
				</div>
				<div class="clearfix"> </div>
			</div>
		</form>
	</div>
</div>

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
			