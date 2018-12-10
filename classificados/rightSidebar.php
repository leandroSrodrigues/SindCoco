<!-- Right Sidebar -->
<div class="col-md-4">
						<aside class="right-sidebar">
							
							<div class="widget">
								<center>
								<h4 class="widgetheading"><i class="fa fa-folder-open" style="color: #4ad1e5; margin-top: 5px;"></i>Saiba mais</h4>
								</center>
								<ul class="cat">
									<li class="estilizando1 text3"><a href="/classificados/index.php" class="textoanav text2" ><i class="glyphicon glyphicon-arrow-left estilizando3"></i> Classificados</a>
                                    </li>
									
									
								</ul>
                            </div>

                           
                            <!-- Informativos -->
							<div class="widget">
								<center>
								<h4 class="widgetheading" >Informativos</h4>
							</center>
								<?php
			                require "../util/conexao.php";
			                $sql = "SELECT * FROM informativos WHERE autorizado = 1 ORDER BY id DESC LIMIT 3";
			                $anuncios = $conexao->query($sql);
			                foreach ($anuncios as $linha) {
			              ?>
												<div class="card informativo1">
					  <h5 class="card-header informativo2">Boletim Informativo</h5>
					  <div class="card-body informativo3">
					  	<?php
					  	if($linha["data"] != null){
					  	?>
					    <h5 class="card-title" style="color: #999;">Data: <?=$linha["data"];?></h5>

					    	<?php
					    	}else{
					    	?>
					    	<h5 class="card-title" style="color: #999;">Data: Não informada</h5>

					    	<?php
								}
							?>
					   
					    <p class="card-text"><?=$linha["titulo"];?></p>
					    <a href="/pdf/informativos/<?=$linha['arquivo'];?>" class="btn btn-primary" style="color: #fff;
    background-color: #007bff;
    border-color: #007bff;" >Abrir PDF</a>
					  </div>
					</div>
					 <?php
                }
              ?>
							</div>

							<!--<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div>-->
							</aside>
					</div>
                </div>
<!-- Fim Rigght Sidebar -->