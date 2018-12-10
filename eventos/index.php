<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eventos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <style type="text/css">
     	

.videoEvento{
	padding-bottom: 50%;
}
.gallery
{
    display: inline-block;
    margin-top: 20px; 
    display: flex;
    flex-wrap: wrap;
}
     </style>
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
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-8">
						<h1 class="font-weight-light  bd bd2" >Eventos</h1>



							<br>
							<br>
							<div class="single-blog " style="border: 1px solid rgba(0,0,0,.125);">
								
								<h3  class="text-center font-up font-bold indigo-text py-2 mb-3 sd3"><strong>Vídeo da palestra em brasília</strong></h3><br>
								
								<!-- 4:3 aspect ratio -->
								<div class="embed-responsive embed-responsive-16by9">
								  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aAHD4ET5Xes"></iframe>
								</div>
								
								<div class="blog-info">
								<ul>
									<li>Data: 05/09/2018</li>
									
								</ul>
								
								<br>
								
							</div>
							

							
						</div>
							
						<h1 class="font-weight-light  bd bd2" >Fotos</h1>
	<div class="row">
		<div class='list-group gallery'>
			 <?php

                require("../util/conexao.php");
                $sql = "SELECT * FROM eventos WHERE ativo = 1 order by id desc";
                $eventos = $conexao->query($sql);

                  foreach ($eventos as $linha) {  
                ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-4'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/eventos/teste.php?id=<?=$linha["id"];?>" style="    width: 90%;">
                    <img class="img-responsive" alt="" src="/img/eventos/<?=$linha['capa'];?>" style="" />
                    <div class='text-right'>
                        <h5 style="    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; color: green; margin-top: 5px;
     margin-bottom: 5px;"><?=$linha["titulo"];?></h5>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->	
            <?php
        }
        ?>
           
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
							
						<!-- Pagination -->
						
						</div>

						<?php
						require("rightSidebar.php");
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
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');

            $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
        </script>
    </body>
</html>
