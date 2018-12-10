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
  <title>Consulta Usuário</title>
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
       <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Usuarios Cadastrados.</h4>
                <hr>
                <thead>
                  <tr>
                    
                    <th><i class=" fa fa-edit"></i> Nome</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Login</th>
                    
                    <th><i class="glyphicon glyphicon-lock" aria-hidden="true"></i> ADM</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Ações</th>

                    
                    
                  </tr>
                  <?php

                $sql = "SELECT * FROM usuario";
                $anuncios = $conexao->query($sql);
                foreach ($anuncios as $linha) {
            ?>
                </thead>
                <tbody>
                  <tr>
                  
                    <td><?=$linha["nome"];?></td>
                    <td><?=$linha["login"];?></td>
                    <?php

                    if($linha["adm"] == 1){

                ?>
                <td ><span class="label label-info label-mini">Sim</span></td>
                <?php
                    }else {

                ?>
                
                <td><span class="label label-info label-danger">Não</span></td>
                
                <?php } ?>
                   
                    
                    <td>
                    <a href="/admin/usuarios/editar.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-success">
                            Editar
                        </button>
                    </a>
                    <a href="/admin/usuarios/delete.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-danger">
                            Deletar
                        </button>
                    </a>                   
                </td>
                   
                  </tr>
                 <?php
                }
            ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 18.5%">
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
 <script src="/admin/lib/common-scripts.js"></script>
</html>
