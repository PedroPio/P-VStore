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
						   unset($_SESSION['login']);
						   session_destroy();
						   echo '<li><a class="lock" href="login.php">Entrar/Registrar</a></li>';
						}
						if(isset($_SESSION['login'])){
						  echo '<li><a class="lock">Bem-Vindo, '.$_SESSION['login'].'</a><br>';
						  echo '<a class="lock" href="?acao=sair">Sair</a></li>';
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
					<input type="text" name="search" value="Buscar na loja..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar na loja...';}">
				</form>
			</div>
			<div class=" h_menu4">
				<ul class="memenu skyblue">
					<!--Link início não aparece na tela inicial -->
					<li class="active grid"><a class="color8" href="pagInicial.php"Buscar na loja..." autocomplete="off"">Início</a></li>
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
	
<!--Corpo-->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price">	  
			<div class=" rsidebar span_1_of_left">
				<!--Destaques laterais-->
				<div class="of-left">
					<h3 class="cate">Categorias</h3>
				</div>
				<ul class="menu">
					<li class="item1"><a href="#">Homens </a>
						<ul class="cute">
							<li class="subitem1"><a href="single.php">subcategoria</a></li>
							<li class="subitem2"><a href="single.php">subcategoria</a></li>
							<li class="subitem3"><a href="single.php">subcategoria</a></li>
						</ul>
					</li>
					<li class="item2"><a href="#">Mulheres </a>
						<ul class="cute">
							<li class="subitem1"><a href="single.php">subcategoria</a></li>
							<li class="subitem2"><a href="single.php">subcategoria</a></li>
							<li class="subitem3"><a href="single.php">subcategoria</a></li>
						</ul>
					</li>
					<li class="item3"><a href="#">Crianças</a>
						<ul class="cute">
							<li class="subitem1"><a href="single.php">subcategoria</a></li>
							<li class="subitem2"><a href="single.php">subcategoria</a></li>
							<li class="subitem3"><a href="single.php">subcategoria</a></li>
						</ul>
					</li>
				</ul>
			</div>

			<script type="text/javascript">
				//menu de categorias
				$(function() {
					var menu_ul = $('.menu > li > ul'),
						menu_a  = $('.menu > li > a');
					menu_ul.hide();
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>

			<div class="product-bottom">
				<div class="of-left-in">
					<h3 class="best">Destaques</h3>
				</div>
				<div class="product-go">
					<div class=" fashion-grid">
						<a href="single.php"><img class="img-responsive " src="../images/p1.jpg" alt=""></a>
								
					</div>
					<div class=" fashion-grid1">
						<h6 class="best2"><a href="single.php" > Chapéu </a></h6>	
							<span class=" price-in1"> R$40.00</span>
					</div>		
						<div class="clearfix"> </div>
				</div>
				<div class="product-go">
					<div class=" fashion-grid">
						<a href="single.php"><img class="img-responsive " src="../images/p2.jpg" alt=""></a>								
					</div>
					<div class="fashion-grid1">
						<h6 class="best2"><a href="single.php" > Vestido </a></h6>	
						<span class=" price-in1"> R$75.00</span>
					</div>		
					<div class="clearfix"> </div>
				</div>
			</div>
			
			<div class=" per1">
				<a href="single.php" ><img class="img-responsive" src="../images/pro.jpg" alt="">
					<div class="six1">
						<h4>Desconto</h4>
						<p>de até</p>
						<span>60%</span>
					</div>
				</a>
			</div>
		</div>
		<!--fim destaques laterais-->

		<div class="col-md-9 product-price1">
			<div class="col-md-5 single-top">	
				<div class="flexslider">
				  	<ul class="slides">
					    <li data-thumb="../images/si.jpg">
					      <img src="../images/si.jpg" />
					    </li>
					    <li data-thumb="../images/si1.jpg">
					      <img src="../images/si1.jpg" />
					    </li>
					    <li data-thumb="../images/si2.jpg">
					      <img src="../images/si2.jpg" />
					    </li>
					    <li data-thumb="../images/si.jpg">
					      <img src="../images/si.jpg" />
					    </li>
				  	</ul>
				</div>

				<script defer src="../js/jquery.flexslider.js"></script>
				<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

				<script>
					//transiçao das imagens
					$(window).load(function() {
					  $('.flexslider').flexslider({
					    animation: "slide",
					    controlNav: "thumbnails"
					  });
					});
				</script>
			</div>	
			<div class="col-md-7 single-top-in simpleCart_shelfItem">
				<div class="single-para">
					<h4>Vestido escuro</h4>
					<h5 class="item_price">R$ 95.00</h5>
					<p>Descrição breve do item.</p>
					<div class="available">
						<div class="col-md">
							<ul>
								<li>
									<select>
										<option hidden>Cor</option>
										<option>Azul</option>
										<option>Cinza</option>
										<option>Preto</option>
										<option>Vermelho</option>
									</select>
								</li>
								<li>
									<select>
										<option hidden>Tamanho</option>
										<option>P</option>
										<option>M</option>
										<option>G</option>
										<option>GG</option>
									</select>
								</li>
							</ul>
						</div>
						<div class="col-md amet-sed">
							<input type="text" placeholder="Calcular frete">
							<input type="submit" value="Calcular">
							<a href="#" class="add-cart item_add">Adicionar ao Carrinho</a>
						</div>
					</div>
					<ul>
						<div class="clearfix"> </div>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
			
			<div class="cd-tabs">
				<nav>
					<ul class="cd-tabs-navigation">
						<li><a data-content="fashion"  href="#0">Descrição </a></li>
						<li><a data-content="cinema" href="#0" >Informações adicionais</a></li>
						<li><a data-content="television" href="#0" class="selected ">Comentários</a></li>
					</ul> 
				</nav>
				<ul class="cd-tabs-content">
					<li data-content="fashion" >
						<div class="facts">
							<p>Descrição detalhada do item.</p>
						</div>
					</li>
					<li data-content="cinema" >
						<div class="facts1">
							<div class="color"><p>Cores</p>
								<span >Azul, Cinza, Preto, Vermelho</span>
								<div class="clearfix"></div>
							</div>
							<div class="color">
								<p>Tamanhos</p>
								<span >P, M, G, GG</span>
								<div class="clearfix"></div>
							</div>   
				 		</div>
				 	</li>

					<li data-content="television" class="selected">
						<a class="add-re" href="#">Comentar</a>
					</li>
					<div class="clearfix"></div>
				</ul> 
			</div> 
			<div class=" bottom-product">
				<div class="col-md-4 bottom-cd simpleCart_shelfItem">
					<div class="product-at ">
						<a href="#"><img class="img-responsive" src="../images/pi3.jpg" alt="">
							<div class="pro-grid">
								<span class="buy-in">Comprar</span>
							</div>
						</a>	
					</div>
					<p class="tun">Descrição do item.</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>R$150.00</p></a>						
				</div>
				<div class="col-md-4 bottom-cd simpleCart_shelfItem">
					<div class="product-at ">
						<a href="#"><img class="img-responsive" src="../images/pi1.jpg" alt="">
							<div class="pro-grid">
								<span class="buy-in">Comprar</span>
							</div>
						</a>	
					</div>
					<p class="tun">Descrição do item.</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>R$150.00</p></a>
				</div>
				<div class="col-md-4 bottom-cd simpleCart_shelfItem">
					<div class="product-at ">
						<a href="#"><img class="img-responsive" src="../images/pi4.jpg" alt="">
							<div class="pro-grid">
								<span class="buy-in">Comprar</span>
							</div>
						</a>	
					</div>
					<p class="tun">Descrição do item.</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>R$150.00</p></a>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--fim corpo-->

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
			