<h4><i class="fa fa-angle-right"></i> Eventos.</h4>
                  <?php

                if($_GET["msg"] != null){

                      ?>
           <h4><i class="fa fa-angle-right"></i> <?=$_GET["msg"];?></h4>
        

             <?php } ?>
                <div class="container" style="margin-top: 50px; ">
                <div class="row" style="    margin-right: 20px;">
           <?php

                $sql = "SELECT * FROM noticias as n WHERE autorizada = 1 and idCategoria = 3 ORDER BY id DESC";
                  $query = $conexao->query($sql);
                    foreach ($query as $linha) {
                            ?>

            <div class="col-md-4" style="margin-top: 15px;  ">
                <div class="card-content">
                    <div class="card-img">
                      <?php
                    if($linha["imagem"] != null){
                            ?>
                    <img src="/img/eventos/<?=$linha['imagem'];?>"  class="cd1"/>
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
                            <a href="/admin/noticias/imagens.php?id=<?=$linha['id']?>" class="btn-card">Adc.Fotos</a>
                             <a href="/admin/noticias/editar.php?id=<?=$linha['id']?>" class="btn-card" style="background-color: #ec9c18;">Editar</a>
                              <a href="/admin/noticias/nao.php?id=<?=$linha['id']?>" class="btn-card" style="background-color: #e14c25;">Inativar</a>

                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>