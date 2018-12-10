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
         


        <h4><i class="fa fa-angle-right"></i> Editar Evento.</h4>
       <div class="row mt">
          <div class="col-lg-6" style="margin-left: 20%">
           
            <div class="form-panel" style="border-radius: 10px;">
              <h4><i class="fa fa-angle-right"></i> Preencha todos os campos.</h4>

              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" action="editarEvento.php" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                  <br>
                   <?php

            $sql = "SELECT * FROM eventos WHERE id = ?";
            
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $_GET['id']);

            $stmt->execute();
      foreach ($stmt as $linha) {

          ?>
                  <div >
                   
                    <div class="col-lg-6">
                      <label for="cname" ><i class="glyphicon glyphicon-pencil"></i> Titulo*:</label>
                      <input class=" form-control" id="cname"  value="<?=$linha['titulo'];?>" name="titulo" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div >
                    
                    <div class="col-lg-4">
                       <label for="cemail" ><i class="glyphicon glyphicon-calendar"></i>Data*:</label>
                      <input class="form-control " id="cuser" value="<?=$linha['data'];?>" type="date" name="data" required />
                    </div>
                  </div>
                  <div >
                    
                   
                    <div class="col-lg-12">
                      <br>
                      <label for="curl" ><i class="glyphicon glyphicon-text-size"></i> Texto*:</label>
                      <textarea  class="form-control" type="text" name="descricao" rows="5" ><?=$linha['descricao'];?></textarea>
                    </div>
                  </div>
                  
                
      
                  
                 
                  <div class="form-group">
                    <div class="col-lg-offset-8 col-lg-4">
                      <br>
                      <button class="btn btn-theme" type="submit">Alterar</button>
                      
                      <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                  </div>
               <?php } ?>
                </form>
              </div>
            </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 165px;">
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
