<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Monitoramento - Fiscalização</title>
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
						<h1 class="font-weight-light  bd bd2" >PRAGAS DE A a Z -<span style="color: green;"> Monitoramento - Fiscalização</span></h1>
						

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
									<h4>Fiscalização</h4>
									<br>
								<b>A fiscalização da plantação deve ser feita em duas etapas:</b><br>

								<b>1ª etapa - Inspeção de Rotina (I.R.)</b><br>

								<p>Realizada periodicamente na plantação para apontar de forma espacial e temporal a presença ou os surtos repentinos das pragas comuns à cultura ou a ocorrência de novas pragas.</p>

								<b>2ª etapa - Inspeção Especial (I.E.)</b><br>

								<p>Inspeção direcionada ao problema diagnosticado na I.R. e que durante o monitoramento das parcelas apresentou taxa de infestação superior a 10%. Tem como principal finalidade a de quantificar a população de praga ou o seu dano para determinar o nível de infestação na plantação e auxiliar na tomada de decisão de que medidas de controle adotar para prevenir danos econômicos.</p>

								<p>Para facilitar a inspeção do plantio a área deve ser dividida em parcelas levando-se em consideração o tamanho e a organização espacial da propriedade.</p>
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
