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
  <title>Informativos</title>

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
       
      <h4><i class="fa fa-angle-right"></i> Alterar Usuario.</h4>
       <div class="row mt">
          <div class="col-lg-6" style="margin-left: 20%">
           
            <div class="form-panel" style="border-radius: 10px;">
              <h4><i class="fa fa-angle-right"></i> Alteração.</h4>
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm"  action="edit.php" method="POST" enctype="multipart/form-data">
                  <br>
                   <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <?php
                $sql = "SELECT * FROM usuario WHERE id = ?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindvalue(1, $_GET["id"]);
                $stmt->execute();
                foreach ($stmt as $linha) {
            ?>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"><i class="glyphicon glyphicon-user"></i> Nome*:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nome" value="<?=$linha['nome'];?>" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2"><i class="  glyphicon glyphicon-pencil"></i>Usuario*:</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cuser" type="text" name="login" value="<?=$linha['login'];?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2"><i class="  glyphicon glyphicon-asterisk"></i> Senha:</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cpassword" type="password" name="senha" value="<?=$linha['senha'];?>" required  />
                    </div>
                  </div>
                  <div class="well well-sm text-center">
      <h3>Permisão de usuario ADM:</h3>
      <div class="dlk-radio btn-group">
      <label class="btn btn-success">
          <input class="form-control" required="required" value="1" name="adm" type="radio">
          <i class="fa fa-check glyphicon glyphicon-ok">Sim</i>
     </label>
    
           <label class="btn btn-danger">
         <input  class="form-control" required="required" value="0" name="adm" type="radio">
         <i class="fa fa-check glyphicon glyphicon-remove">não</i>
       </label>
    </div>
    <?php } ?>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-8">
                      <br>
                      <button class="btn btn-theme" type="submit">Alterar</button>
                      
                      <button class="btn btn-warning" type="button">Cancelar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top:60px;">
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
