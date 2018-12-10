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
            require("../util/conexao.php");
    ?>
    <!-- fav icon -->

      <link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>
<style type="text/css">
      .imagemanuncio{
        width: 50%;
        height: 50%
      }

      .anunciotexto{
        font-size: 15px;

      }
    </style>
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
    

    
    
    
    <section class="blog-single cardn1"  >
             <?php

                $sql = "SELECT a.*, e.nome AS nome_estado FROM anuncio AS a, estado AS e WHERE a.id = ? AND a.estado = e.id";

                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $_GET['id']);

                $stmt->execute();

                foreach ($stmt as $linha) { 

            ?>

<!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?=$linha['titulo'];?></h1>

          
          <hr>

          <!-- Preview Image -->
          <?php

                if($linha["imagem"] != null){
              ?>
              <center>
  <img class="card-img-top"  style="height: 350px;" src="/img/anuncios/<?=$linha['imagem'];?>" alt="Card image cap">
</center>
  <?php
              }else {
                ?>
                <center>
                <img src="/img/anuncios/off.jpg" class="imagemanuncio card2" />
              </center>
              <?php
                }
              ?>
              <hr>
           <p class="card-text" ><i class="glyphicon glyphicon-edit anunciotexto"><strong> Descrição:</strong></i> <?=$linha['descricao'];?></p>
    <h5 class="card-title" style="    color: #ab9812;" >Preço R$: <?php if($linha["preco"] != null){
                                      ?>
                                      <?=$linha['preco'];?>
                                        <?php
                                      }else{
                                        ?>
                                        Valor a combinar.
                                        <?php
                                         }
                                         ?></h5>

          <!-- Post Content -->
          <hr>
          <br>
    <h4 class="card-title" >Dados do usuario.</h4>
    <p class="col-md-6" ><i class=" glyphicon glyphicon-user anunciotexto"><strong> Nome:</strong></i> <?=$linha['nome'];?></p>
    <p class="col-md-5" ><i class="glyphicon glyphicon-earphone anunciotexto"> <strong>Tefone:</strong> </i> <?php if($linha["fone"] != null){
    ?>
     <?=$linha['fone'];?>
     <?php
   }else{
    ?>
    Telefone não informado.
    <?php
   }
   ?></p>
    <p class="col-md-6" > <i class="glyphicon glyphicon-envelope anunciotexto"><strong> E-mail:</strong></i> <?=$linha['email'];?></p>
    <p class="col-md-5" ><i class="glyphicon glyphicon-road anunciotexto"><strong> Estado:</strong></i> <?=$linha['nome_estado'];?></p>
    <p class="col-md-5" ><i class="glyphicon glyphicon-home anunciotexto"><strong> Cidade:</strong></i> <?php if($linha["cidade"] != null){
    ?>
     <?=$linha['cidade'];?>
     <?php
   }else{
    ?>
    Cidade não informada.
    <?php
   }
   ?> </p>
          
 
       

         
        </div>

        <?php
        }
        ?>

        <!-- Sidebar Widgets Column -->
       <?php

        include("rightSidebar.php");

      ?>

          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

           
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
