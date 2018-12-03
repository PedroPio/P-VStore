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
<script src="../js/simpleCart.min.js"> </script>
</head>
<body>

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
						   unset($_SESSION['login']);
						   session_destroy();
						}
						if(isset($_SESSION['login'])){
						  echo '<li><a class="lock">Bem-Vindo, '.$_SESSION['login'].'</a><br>';
						  echo '<a class="lock" href="?acao=sair" >Sair</a></li>';
						}
						else{
							echo '<li><a class="lock" href="login.php">Entrar/Registrar</a></li>';
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

<!--Banner-->
<div class="banner">
	<div class="container">
		<script src="../js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<div id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					<div class="banner-text">
						<h3>Promoções de Natal</h3>
						<p>Venha presentear toda a família com as promoções de Natal da P&V Store!</p>
						<a href="single.php">Conferir</a>
					</div>
				</li>
				<li>
					<div class="banner-text">
						<h3>Promoção fim de inverno</h3>
						<p>Itens que sairão de modas com descontaços nos preços!</p>
						<a href="single.php">Conferir</a>
					</div>
				</li>
				<li>
					<div class="banner-text">
						<h3>Lançamentos Verão</h3>
						<p>Aproveite as novas linhas preparadas para o verão!</p>
						<a href="single.php">Conferir</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--fim banner-->

<!--Destaques-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Destaques</h1>
			<div class="grid-in">
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
									<span>Camisas</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Camisas populares</a></p>
				</div>
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi1.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Tênis</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Tênis corrida</a></p>
				</div>
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi2.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Mochila</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Mochilas escolares</a></p>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="grid-in">
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi3.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Agasalhos</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Jaquetas</a></p>
				</div>
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi4.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Bolsas</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Bolsas de utensílios</a></p>
				</div>
				<div class="col-md-4 grid-top">
					<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/pi5.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Tênis</span>	
							</h3>
						</div>
					</a>
					<p><a href="single.php">Tênis para academia</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="../images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="../images/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="../images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="../images/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="../images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="../images/lo2.png" alt=""></a></li>
			<div class="clearfix"> </div>
		</ul>
	</div>
</div>
<!--fim Destaques-->

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
			