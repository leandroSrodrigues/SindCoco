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
  <title>Consultar Eventos</title>
<link href="../img/logoMini.png" rel="icon">
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
       <h4><i class="fa fa-angle-right"></i> Eventos.</h4>
                  <?php

                if($_GET["msg"] != null){

                      ?>
           <h4><i class="fa fa-angle-right"></i> <?=$_GET["msg"];?></h4>
        

             <?php } ?>
                <div class="container" style="margin-top: 50px; ">
                <div class="row" style="    margin-right: 20px;">
            <?php

                $sql = "SELECT * FROM eventos WHERE ativo = 1 ORDER BY data DESC";
                $query = $conexao->query($sql);
                foreach ($query as $linha) {
            ?>

            <div class="col-md-4" style="margin-top: 15px;  ">
                <div class="card-content">
                    <div class="card-img">
                      <?php
                    if($linha["capa"] != null){
                            ?>
                    <img src="/img/eventos/<?=$linha['capa'];?>"  class="cd1"/>
                      <?php
                        }else {
                            ?>
                    <img src="/img/anuncios/off.jpg" class="cd1"/>
                        <?php
                          }
                            ?> 
                        <span>novo</span>
                    </div>
                    <div class="card-desc">
                        <h3 class="cd3"><?=$linha["titulo"];?></h3>
                        <p class="pTexto"><?=$linha["descricao"];?></p>

                        <a ><?=date('d/m/Y', strtotime($linha['data']));?></a>
                        <br>
                        <br>
                            <a href="/admin/eventos/imagens.php?id=<?=$linha['id']?>" class="btn-card">Adc.Fotos</a>
                             <a href="/admin/eventos/editar.php?id=<?=$linha['id']?>" class="btn-card" style="background-color: #ec9c18;">Editar</a>
                              <a href="/admin/eventos/inativarEvento.php?id=<?=$linha['id']?>" class="btn-card" style="background-color: #e14c25;">Inativar</a>

                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
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
