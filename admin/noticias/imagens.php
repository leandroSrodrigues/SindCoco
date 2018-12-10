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
  <title>Eventos</title>

  <!-- Favicons
  <link href="/admin/img/favicon.png" rel="icon">
  <link href="/admin/img/apple-touch-icon.png" rel="apple-touch-icon">
-->


  <?php
		
			
			
        require("../imports.php");
        require("../../util/conexao.php");
       


    ?>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
     <?php

            require("../nav.php");

        ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <?php

            require("../navLateral.php");

        ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h1>

          <?=$_GET['msg'];?>

        </h1>
        <form method="POST" class="form" enctype="multipart/form-data" action="/admin/noticias/inserirImagem.php">
        <input type="hidden" name="idEvento" require="require" value="<?=$_GET['id'];?>" />
        <div class="form-group row">







        <label for="example-text-input" class="col-2 col-form-label">Imagem: </label>
        <div class="col-8">
            <input class="form-control" require="require" type="file" name="imagem" id="example-text-input">
        </div>
        <div class="well well-sm text-center">
      <h3>Imagem:</h3>
      <div class="dlk-radio btn-group">
      <label class="btn btn-success">
          <input class="form-control" required="required" value="1" name="tipo" type="radio">
          <i class="fa fa-check glyphicon glyphicon-ok">Sim</i>
     </label>
    
           <label class="btn btn-danger">
         <input  class="form-control" required="required" value="0" name="tipo" type="radio">
         <i class="fa fa-check glyphicon glyphicon-remove">não</i>
       </label>
    </div>
        
        </div>                    
            <center>
            <button type="submit" class="btn btn-sm btn-primary">
                Enviar
            </button>
          </center>
        </form>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 360px;">
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

</html>
