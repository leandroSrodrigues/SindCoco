<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Informativos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <?php

require "../util/imports.php";

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

include "nav.php";

?>



		<section class="blog-single" style="margin-top: 50px;">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="single-blog">
							
							<h1 class="font-weight-light  bd bd2" >Informativos</h1>
							<center>
							<img src="/img/logoPag.png" alt="Blog Image" width="100%"/>
							</center>
							<p style="width: 100" >Estes Boletim Conjuntural reúne informações sobre as
								importações de coco ralado e água de coco, tratando mais detalhadamente
								dos ocorridos. As estatísticas de importações e
								exportações brasileiras desde o inicio constituem as mais recentes
								informações sobre o assunto liberadas pela Secretaria de Comércio
								Exterior do Ministério da Indústria, Comércio Exterior e Serviços.
								</p>
								<?php
 
# inclui o arquivo config(arquivo de conexão com o banco de dados)
require("../util/conexao.php");
 
# Limita o número de registros a serem mostrados por página
$limite = 10;
 
# Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
 
# Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql = "SELECT * FROM informativos  WHERE autorizado = 1 ORDER BY id DESC LIMIT ".$inicio. ", ". $limite;
 
try {
       
        $query = $conexao->prepare($sql);
        $query->execute();
 
        } catch (PDOexception $error_sql){
 
                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
 
}
 
while($linha = $query->fetch(PDO::FETCH_ASSOC)){ ?>
											
												<div class="card informativo1">
					  <h5 class="card-header informativo2">Boletim Informativo</h5>
					  <div class="card-body informativo3">
					  	<?php
					  	if($linha["data"] != null){
					  	?>
					    <h5 class="card-title" style="color: #999;">Data: <?=$linha["data"];?></h5>

					    	<?php
					    	}else{
					    	?>
					    	<h5 class="card-title" style="color: #999;">Data: Não informada</h5>

					    	<?php
								}
							?>
					   
					    <p class="card-text"><?=$linha["titulo"];?></p>
					    <a href="/pdf/informativos/<?=$linha['arquivo'];?>" class="btn btn-primary" style="color: #fff;
    background-color: #007bff;
    border-color: #007bff;" >Abrir PDF</a>
					  </div>
					</div>
					<?php }
 
# seleciona o total de registros  
$sql_Total = ' SELECT titulo FROM informativos WHERE autorizado = 1';
 
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
    echo '<li><a  href="informativos.php?pg=1">Principal</a></li>';
       
        if($qtdPag > 1 && $pg <= $qtdPag){
               
                for($i = 1; $i <= $qtdPag; $i++){
 
                        if($i == $pg){
 
                                echo "<li><a class='active'>".$i."</a></li>";
 
                        } else {
 
                                echo "<li><a href='informativos.php?pg=$i'>".$i."</a></li>";
                               
                        }
 
                }
 
        }
 
        echo "<li><a  href='informativos.php?pg=$qtdPag'>Ultima</a></li>";
 
?>
							</div>
							

						








						

					</div>
					<!-- Right Sidebar -->
					<?php
						require "rightSidebar.php";
					?>
			</div>
		</section>



		<!-- Footer -->
		<?php

			require "footer.php";

		?>




        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>



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
