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
  <title>Pragas Inativas</title>
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
        <h4><i class="fa fa-angle-right"></i> Pragas Inativas.</h4>
      <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>

        <table class="table ">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><i class="fa fa-picture-o"></i>Imagem</th>
                <th scope="col"><i class=" fa fa-edit"></i>Nome</th>
                <th scope="col"><i class="fa fa-calendar"></i>Nome Científico</th>
                <th scope="col"><i class="fa fa-question-circle"></i>Situação</th>
                <th scope="col">Ações</th>
            </tr>
            <?php

                $sql = "SELECT * FROM pragas WHERE aceito = 0 ORDER BY nome DESC";
                $query = $conexao->query($sql);
				foreach ($query as $linha) {
            ?>

            <tr>
                <?php
					if($linha["imagem"] != null){
				?>
					<td><img style="max-width: 200px;" src="/img/pragas/<?=$linha['imagem'];?>"  class="img-thumbnail"/></td>
				<?php
					}else {
				?>
					<td><img style="max-width: 200px;" src="/img/anuncios/off.jpg" class="img-thumbnail"/></td>
				<?php
					}
				?>
                <td scope="col" style="width: 200px;"><?=$linha["nome"];?></td>
                <td scope="col" style="width: 600px;"><?=$linha["nome_cientifico"];?></td>
                <td scope="col" style="width: "><span class="label label-warning">Inativo</span></td>
                <td>
                     <a href="/admin/pragas/ReativaPraga.php?id=<?=$linha['id']?>"> <button  class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button> </a>
                      
                    <a href="/admin/pragas/deletarPraga.php?id=<?=$linha['id']?>">  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button> </a>
                    </td>
               
            </tr>

            <?php
                }
            ?>

        </table>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 35%">
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
