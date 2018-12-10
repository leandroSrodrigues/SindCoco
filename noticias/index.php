<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noticias do SINDCOCO</title>
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
		

		
		
		
		<section class="blog-single cardn1" >


            <center
			<div class="container bg-light cardn2">
        
        <!-- cards -->
        <div id="cards" class="bg-light cardn3" >

            <h1 class="font-weight-light text-center my-3 cardn4" >Notícias</h1>
            <br>

          
                <div class="container">
      <div class="row">
        <?php
 
# inclui o arquivo config(arquivo de conexão com o banco de dados)
require("../util/conexao.php");
 
# Limita o número de registros a serem mostrados por página
$limite = 20;
 
# Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
 
# Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql = "SELECT * FROM noticias  WHERE autorizada = 1 AND idCategoria = 3 ORDER BY id DESC LIMIT ".$inicio. ", ". $limite;
 
try {
       
        $query = $conexao->prepare($sql);
        $query->execute();
 
        } catch (PDOexception $error_sql){
 
                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
 
}
 
while($linha = $query->fetch(PDO::FETCH_ASSOC)){ ?>
       
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/img/noticias/<?=$linha['imagem'];?>" style="    max-width: 850px; max-height: 160px;">
            <span class="cardn15" ><h6 style="font-size: 8px;">novo</h6></span>
              <div class="caption">
                <h4 style="max-width: 80ch;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;"><?=$linha["titulo"];?></h4>
                <p ></p>
                <a href="/noticias/lerMais.php?id=<?=$linha['id'];?>" class="btn btn-info btn-xs" role="button">Detalhes</a> <a  class="btn btn-default btn-xs pull-right" role="">data: <?=$linha['data'];?></a>
            </div>
          </div>



        </div>
        
      <?php }
 
# seleciona o total de registros  
$sql_Total = ' SELECT titulo FROM noticias WHERE autorizada = 1';
 
try {
       
        $query_Total = $conexao->prepare($sql_Total);
        $query_Total->execute();
 
        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
 
        # conta quantos registros tem no banco de dados
        $query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);
 
        # calcula o total de paginas a serem exibidas
        $qtdPag = ceil($query_count/$limite);
 
        } catch (PDOexception $error_Total){
       
                echo 'Erro ao retornar os Dados. '.$error_Total->getMessage();
 
        }
 
        
        # echo '<a href="busca?pg=1">PRIMEIRA PÁGINA</a>&nbsp;';
        echo '<ul class="pagination">';
    echo '<li><a  href="index.php?pg=1">Principal</a></li>';
       
        if($qtdPag > 1 && $pg <= $qtdPag){
               
                for($i = 1; $i <= $qtdPag; $i++){
 
                        if($i == $pg){
 
                                echo "<li><a class='active'>".$i."</a></li>";
 
                        } else {
 
                                echo "<li><a href='index.php?pg=$i'>".$i."</a></li>";
                               
                        }
 
                }
 
        }
 
        echo "<li><a  href='index.php?pg=$qtdPag'>Ultima</a></li>";
 
?>


       <!--fim --> 
  </div><!--/row-->
</div><!--/container -->
          

    </div>  
</center>
					
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
