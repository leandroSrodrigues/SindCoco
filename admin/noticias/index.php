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
  <title>Consultar Noticias</title>
<link href="../img/logoMini.png" rel="icon">
</style>
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

<body style="background-color: white;">
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
        <!-- /showback -->
            <!--  MODALS -->
            
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Adc.Imagem</h4>
                    </div>
                    <div class="modal-body">
                      <?php
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado uma imagem
if ( isset( $_FILES[ 'imagem' ][ 'name' ] ) && $_FILES[ 'imagem' ][ 'error' ] == 0 ) {
    echo 'Você enviou a imagem: <strong>' . $_FILES[ 'imagem' ][ 'name' ] . '</strong><br />';
    echo 'Esta imagem é do tipo: <strong > ' . $_FILES[ 'imagem' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'imagem' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'imagem' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $imagem_tmp = $_FILES[ 'imagem' ][ 'tmp_name' ];
    $nome = $_FILES[ 'imagem' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../../img/noticias/' . $novoNome;
 
        // tenta mover o imagem para o destino
        if ( @move_uploaded_file ( $imagem_tmp, $destino ) ) {
            echo 'imagem salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }
        else
            echo 'Erro ao salvar o imagem. Aparentemente você não tem permissão de escrita.<br />';
    }
    else{
        $msg = 'Você poderá enviar apenas imagens "*.jpg;*.jpeg;*.gif;*.png"<br />';
        header("Location: /admin/eventos/index.php?msg=".$msg);
    }
}
else{
    $msg = 'Você não enviou nenhum imagem!';
    header("Location: /admin/eventos/index.php?msg=".$msg);
}
?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
                      <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                  </div>
                </div>
              </div>
            
            <!-- /showback -->
        <h4><i class="fa fa-angle-right"></i> Noticias.</h4>
                  <?php

                if($_GET["msg"] != null){

                      ?>
           <h4><i class="fa fa-angle-right"></i> <?=$_GET["msg"];?></h4>
        

             <?php } ?>
                <div class="container" style="margin-top: 50px;">
                <div class="row">

                   <?php
 
# inclui o arquivo config(arquivo de conexão com o banco de dados)
require("../../util/conexao.php");
 
# Limita o número de registros a serem mostrados por página
$limite = 21;
 
# Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
 
# Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql = "SELECT * FROM noticias as n WHERE autorizada = 1 and id <> 8 ORDER BY idCategoria DESC LIMIT ".$inicio. ", ". $limite;
 
try {
       
        $query = $conexao->prepare($sql);
        $query->execute();
 
        } catch (PDOexception $error_sql){
 
                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
 
}
 
while($linha = $query->fetch(PDO::FETCH_ASSOC)){ ?>



            <div class="col-md-4" style="margin-top: 15px;">
                <div class="card-content">
                    <div class="card-img">
                      <?php
                    if($linha["imagem"] != null){
                            ?>
                    <img src="/img/noticias/<?=$linha['imagem'];?>"  class="cd1"/>
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
                        <div class="pTexto">
                      <p><?=$linha["texto"];?></p>
                        </div>
                        <a ><?=date('d/m/Y', strtotime($linha['data']));?></a>
                        <br>
                        <br>
                            <a  href="/admin/noticias/imagens.php?id=<?=$linha['id']?>" class="btn-card" >Adc. Arquivo</a>
                             <a href="/admin/noticias/editar.php?id=<?=$linha['id']?>" class="btn-card"  style="background-color: #ec9c18;">Editar</a>
                              <a href="/admin/noticias/nao.php?id=<?=$linha['id']?>" class="btn-card" style="background-color: #e14c25;">Revogar</a>

                    </div>
                </div>

            </div>
               <?php }
 
# seleciona o total de registros  
$sql_Total = ' SELECT titulo FROM noticias WHERE autorizada = 1 and id <> 8';
 
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
