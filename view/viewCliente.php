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
						}
						if(isset($_SESSION['login'])){
							if($_SESSION['user'] == 'admin'){
						  		echo '<li><a class="lock" href="crud.php">CRUD</a>';
						  	}
						  	//Icon made by https://www.flaticon.com/authors/smashicons from www.flaticon.com
						  	echo '<li><img src="../images/user.png" style="padding-right: 10px;"><a class="lock">Bem-Vindo, '.$_SESSION['nome'].'</a><br>';
						  	echo '<a class="lock" href="?acao=sair" >Sair</a></li>';
						}
						else{
							echo '<li><a class="lock" href="login.php"><img src="../images/user.png" style="padding-right: 10px;">Entrar/Registrar</a></li>';
						}
						//$logado = $_SESSION['login'];
					?>
				</ul>
				<div class="cart box_1">
					<a href="checkout.php">
					<h3> <div class="total">
						<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> itens)</div>
						<img src="../images/cart.png" alt=""/></h3>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<div class="container">
		<div class="head-top">
			<div class="search">
				<form>
					<input type="text" name="search" value="Buscar na loja..." autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar na loja...';}">
				</form>
			</div>
			<div class=" h_menu4">
				<ul class="memenu skyblue">
					<!--Link início não aparece na tela inicial (pagInicial.php)-->
					<li class="active grid"><a class="color8" href="pagInicial.php">Início</a></li>
					<li><a class="color1" href="#">Homem</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Roupas</h4>
											<li><a href="products.php">Bermudas</a></li>
											<li><a href="products.php">Bermudas Jeans</a></li>
											<li><a href="products.php">Bonés</a></li>
											<li><a href="products.php">Blusas</a></li>
											<li><a href="products.php">Calças</a></li>
											<li><a href="products.php">Camisas</a></li>
											<li><a href="products.php">Camisetas</a></li>
											<li><a href="products.php">Cuecas</a></li>
											<li><a href="products.php">Moletom</a></li>
											<li><a href="products.php">Polo</a></li>
											<li><a href="products.php">Sunga</a></li>
										</ul>	
									</div>							
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Calçados</h4>
											<li><a href="products.php">Alpargatas</a></li>
											<li><a href="products.php">Chinelos</a></li>
											<li><a href="products.php">Shorts</a></li>
											<li><a href="products.php">Chinelo Slide</a></li>
											<li><a href="products.php">Chuteiras</a></li>
											<li><a href="products.php">Sapatos</a></li>
											<li><a href="products.php">Sapatênis</a></li>
											<li><a href="products.php">Tênis</a></li>
											<li><a href="products.php">Tênis Casual</a></li>
											<li><a href="products.php">Tênis para Corrida</a></li>
											<li><a href="products.php">Tênis de skate</a></li>
										</ul>	
									</div>							
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Acessórios</h4>
											<li><a href="products.php">Boné Aba Reta</a></li>
											<li><a href="products.php">Boné Aba Curva</a></li>
											<li><a href="products.php">Carteiras</a></li>
											<li><a href="products.php">Cintos</a></li>
											<li><a href="products.php">Malas</a></li>
											<li><a href="products.php">Mochilas</a></li>
											<li><a href="products.php">Óculos de Sol</a></li>
											<li><a href="products.php">Pulseiras e Colares</a></li>
											<li><a href="products.php">Relógios</a></li>
										</ul>	
									</div>												
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a class="color2" href="#">Mulher</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Roupas</h4>
											<li><a href="products.php">Biquínis</a></li>
											<li><a href="products.php">Blusas</a></li>
											<li><a href="products.php">Calça Jeans</a></li>
											<li><a href="products.php">Camisetas</a></li>
											<li><a href="products.php">Macacão</a></li>
											<li><a href="products.php">Maiôs</a></li>
											<li><a href="products.php">Moletom</a></li>
											<li><a href="products.php">Saias</a></li>
											<li><a href="products.php">Shorts</a></li>
											<li><a href="products.php">Vestidos</a></li>
										</ul>	
									</div>							
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Calçados</h4>
											<li><a href="products.php">Alpargatas</a></li>
											<li><a href="products.php">Chinelos</a></li>
											<li><a href="products.php">Rasteirinhas</a></li>
											<li><a href="products.php">Sandálias</a></li>
											<li><a href="products.php">Sapatilhas</a></li>
											<li><a href="products.php">Sapatos</a></li>
											<li><a href="products.php">Tênis</a></li>
											<li><a href="products.php">Tênis Casual</a></li>
											<li><a href="products.php">Tênis para Corrida</a></li>
											<li><a href="products.php">Tênis de skate</a></li>
										</ul>	
									</div>							
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<h4>Acessórios</h4>
											<li><a href="products.php">Bijuterias</a></li>
											<li><a href="products.php">Bolsas</a></li>
											<li><a href="products.php">Bonés</a></li>
											<li><a href="products.php">Carteiras</a></li>
											<li><a href="products.php">Cintos</a></li>
											<li><a href="products.php">Nécessaire</a></li>
											<li><a href="products.php">Malas</a></li>
											<li><a href="products.php">Mochilas</a></li>
											<li><a href="products.php">Óculos de Sol</a></li>
											<li><a href="products.php">Pulseiras e Colares</a></li>
											<li><a href="products.php">Relógios</a></li>
										</ul>	
									</div>												
								</div>
							</div>
						</div>
					</li>
					<li><a class="color6" href="contact.php">Contato</a></li>
				</ul> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--fim do header-->

	
<!--Registro-->
<div class="container">
	<div class="register">
        <div class="head-top">
            <form action="../controller/cliente/consultarCliente.php" method="POST">
                <h1>Visualizar Cliente</h1><br>
                <hr class="my-4" style="padding-bottom: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-12 register-top-grid">
                        <h3>Informações para consulta</h3><br>
                    </div>
                    <div class="col-md-6 register-top-grid">
                        <div style="padding-bottom: 20px;">
                            <span>Código do cliente</span>
                            <input type="number" name="codigo"> 
                        </div>
                        <h3>Ou por</h3>
                        <div style="padding-top: 20px;">
                            <span>CPF</span>
                            <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                            placeholder="ex: 111.111.111-11"> 
                        </div>
                    </div>
                    <div class="col-md-8 register-bottom-grid">
                        <input type="submit" value="Consultar">						
                    </div>
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
        <hr class="my-4">
        <a href="crudClientes.php" style="color: black;">
            Voltar
        </a>
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
			
