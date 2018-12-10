<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Monitoramento - procedimentos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		
			require("../util/imports.php");
		?>
		<!-- fav icon -->

			<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

    </head>
    <body class="blog">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
		<header>
			
			<?php

				include("nav.php");

			?>
		

		
		
		
		<section class="blog-single">
			<div class="container">
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-8">
						<h1 class="font-weight-light  bd bd2" >PRAGAS DE A a Z -<span style="color: green;"> Monitoramento - procedimentos</span></h1>
						

							<?php

                            require "menuMonitoramento.php";

                        ?>
							
							<p class="bd"><b style="color: green;">Créditos:</b> <br>
							<b>EMBRAPA</b> - Empresa Brasileira de Pesquisa Agropecuária<br>
							<b>Joana Maria Santos Ferreira</b> - Editora Técnica</p>
							<br>
								<div class="single-blog" style="border: 1px solid rgba(0,0,0,.125);">
								<br>
								<div class="textoP">
									<h4>Procedimentos</h4>
									<br>
								

								<b>Caminhamento dentro das parcelas</b><br>

								<b>1º passo:</b><br>

								<p>O monitor deverá selecionar, por sorteio, a 1ª fileira a ser amostrada entre as primeiras fileiras da parcela e a partir desta selecionar as demais, de acordo com as indicações propostas para as parcelas de 100, 200, 800, 1600, 2000 e 4000 plantas. Marcar cada fileira com uma bandeira de cor (1,0 a 1,5m de altura) no seu início e final para orientar o trajeto a ser percorrido durante as inspeções de rotina e especial. Na inspeção de rotina todas as plantas das fileiras selecionadas são amostradas atribuindo-se a nota 0 para ausência e 1 para presença de cada praga, observando o sinal característico deixado nas diversas estruturas da planta. Na inspeção especial a amostragem se reduz a um número menor de plantas e se faz necessária quando a presença de praga ultrapassar 10% das plantas amostradas na inspeção de rotina. O objetivo a partir deste momento será o de quantificar o ataque da praga na plantação, a fim de estabelecer seu nível de controle.</p>

								<b>2º passo:</b>

								<p>A entrada no monitor na parcela será feita a partir de um de seus vértices. A orientação do caminhamento dentro das parcelas é demonstrada, a seguir em três tamanhos das parcelas propostas:</p>
								<br>
								<center>
								<img src="/img/monitoramento/tbl-praga-frequencia.gif" usemap="#map" style="max-width: 100%; max-height: 100%">
								<map name="Map">
                    <area shape="rect" coords="1,35,130,57" data-toggle="modal" data-target="#myModal1"  >
                    <area shape="rect" coords="0,68,136,94" data-toggle="modal" data-target="#myModal2" >
                    <area shape="rect" coords="168,32,304,60" data-toggle="modal" data-target="#myModal3" >
                    <area shape="rect" coords="170,72,306,98" data-toggle="modal" data-target="#myModal4">
                    <area shape="rect" coords="339,32,479,63" data-toggle="modal" data-target="#myModal5">
                    <area shape="rect" coords="343,69,475,95" data-toggle="modal" data-target="#myModal6" >
                  </map>
								</center>
								<br>

								
								</div>

								<div class="blog-info">
								
								
								<br>
								
							</div>
							

							
						</div>
						
							
						<!-- Pagination 
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
                        -->
						</div>

                        
						<?php
						require("rightMonitoramento.php");
							?>
						
						<?php
						require("modal.php");
							?>
						<!--<div class="single-blog">
							<a href="#"><h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3></a>
							<iframe width="100%" height="450" src="https://www.youtube.com/embed/AASd5ewKNSw" frameborder="0" allowfullscreen></iframe>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							<div class="blog-info">
								<ul>
									<li><a href="">Date: June 05, 2016</a></li>
									<li><a href="">Author Name</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">10 Comments</a></li>
								</ul>
								
								<div class="read-more pull-right">
									<a href="#" class="btn btn-readmore">Continue Reading</a>
								</div>
								
							</div>
							
						</div> -->
						
						
						<!-- Pagination -->
					
			</div>
		</section>
		
		
		
		<!-- Footer -->
		<?php

			require("footer.php");

		?>
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
