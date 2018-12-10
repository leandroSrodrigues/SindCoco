<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: /admin/index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SindCoco</title>

  <!-- Favicons -->
  <link href="../img/logoMini.png" rel="icon">
  <link href="/admin/img/apple-touch-icon.png" rel="apple-touch-icon">


  
  <?php
		
			
			
            require("imports.php");
            require("../util/conexao.php");
           


		?>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <style type="text/css">
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  </style>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
     <?php

            require("nav.php");

        ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <?php

            require("navLateral.php");

        ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      
        <div class="container" style="margin-top: 30px;">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-bullhorn"></i>
        <?php 
						require("../util/conexao.php");
						$sql = "SELECT count(*) as ids FROM anuncio";
						$stmt = $conexao->query($sql);
						foreach ($stmt as $linha) {
					?>

                <span class="count-numbers"><?=$linha["ids"];?></span>

          <?php } ?>
        <span class="count-name">Anuncios</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="glyphicon glyphicon-remove"></i>
         <?php 
						/*
						$sql = "SELECT count(*) as ids pragas FROM informativos";
						$stmt = $conexao->query($sql);
						foreach ($stmt as $linha) {
            */
					?>

                <span class="count-numbers">599</span>
                

        <span class="count-name">Pragas</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-file-pdf-o"></i>
        <?php 
						
						$sql = "SELECT count(*) as ids FROM informativos";
						$stmt = $conexao->query($sql);
						foreach ($stmt as $linha) {
            
					?>

                <span class="count-numbers"><?=$linha['ids'];?></span>

            <?php } ?>
        <span class="count-name">Informativos</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-list-alt"></i>
        <?php 
						
						$sql = "SELECT count(*) as ids FROM noticias";
						$stmt = $conexao->query($sql);
						foreach ($stmt as $linha) {
            
					?>

                <span class="count-numbers"><?=$linha['ids'];?></span>
                
            <?php } ?>
        <span class="count-name">Noticias</span>
      </div>
    </div>
  </div>
</div>

    <div class="row mt" style="margin-top: 90px;">
          <div class="col-lg-12">
            <div class="row content-panel">
              
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text" style="margin-left: 25%">
                <h3>Bem vindo!</h3>
                <h6>Main Administrator</h6>
                <p>Sistema Administrativo do Sindicato Nacional de Coco do Brasil.</p>
                <br>
                
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                
                  <p><img src="img/log.png" width="55%"></p>
                 
                
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 170px;">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  
</body>
 
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</html>
