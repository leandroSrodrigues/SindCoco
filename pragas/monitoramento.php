<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Monitoramento</title>
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
						<h1 class="font-weight-light  bd bd2" >PRAGAS DE A a Z -<span style="color: green;"> Monitoramento</span></h1>
						

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
								 <p >O monitoramento é um instrumento utilizado de maneira eficiente no Sistema de Produção Integrada de Frutas - PIF para registrar a ocorrência de pragas na plantação, em tempo, espaço e número e determinar o nível de dano causado à planta e o de infestação na plantação. Uma praga pode estar presente na plantação e não causar prejuízos econômicos à lavoura.</p>

<p> O objetivo principal do monitoramento é prevenir que o nível de infestação da praga venha a superar o nível de controle pré-estabelecido e auxiliar na tomada de decisão de:</p>

<p> <b>a)</b> continuar a inspecionar a área sob monitoramento em intervalos menores para avaliar a evolução da infestação;<br>
<b>b)</b> estabelecer o momento apropriado para intervenção;<br>
<b>c)</b> escolher os meios mais adequados, eficientes e seguros de controle.</p>

<p> Essa operação requer a realização de amostragens criteriosas, especificas e frequentes para cada espécie-praga, de forma a prever qualquer ataque de pragas a tempo de impedir que focos de infestação presentes na plantação possam se desenvolver e causar sérios efeitos na produção.</p>

<p> O nível de ação para as pragas do coqueiro está sendo estabelecido com base na porcentagem de órgãos ou de plantas, encontrados danificados durante a inspeção de rotina ou durante a inspeção especial.</p>

<p> Um bom monitoramento deve:</p>

<p><b>i)</b> abranger diversos pontos do pomar;<br>
<b>ii)</b> avaliar um número menor de plantas, mas que, no todo, retrate as condições fitossanitárias do ponto amostrado e/ou da plantação;<br>
<b>iii)</b> considerar os diferentes estágios fonológicos da planta;<br>
<b>iv)</b> ser praticado por pessoas treinadas que possam reconhecer as pragas, o grau de tolerância da plantação à presença das espécies, suas respectivas injúrias, bem como as medidas de controle disponíveis para prevenir danos econômicos.</p>
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
