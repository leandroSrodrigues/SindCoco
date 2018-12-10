<aside>
      <div id="sidebar" class="nav-collapse ">
      
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a ><img src="../img/7.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?=$_SESSION["nome"];?></h5>
          <li class="mt">
            <a class="active" href="/admin/indexLogin.php">
              <i class="fa fa-dashboard"></i>
              <span>Início</span>
              </a>
          </li>
          <?php

              if($_SESSION["adm"] == 1) {

          ?>
          <li class="sub-menu">
            <a href="/admin/usuarios/">
              <i class="fa fa-desktop"></i>
              <span>Usuários</span>
              </a>
              <ul class="sub">
              <li><a href="/admin/usuarios/cadastrar.php">Cadastrar Usuários</a></li>
              <li><a href="/admin/usuarios/">Consultar Usuários</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Notícias</span>
              </a>
            <ul class="sub">
              
              <li><a href="/admin/noticias/cadastrar.php">Cadastrar Notícias</a></li>
              <li><a href="/admin/noticias/">Consultar Notícias</a></li>
              <li><a href="/admin/noticias/autorizar.php">Autorizar</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Eventos</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/eventos/cadastrar.php">Cadastrar Eventos</a></li>
              <li><a href="/admin/eventos/">Consultar Eventos</a></li>
              <li><a href="/admin/eventos/imagensEvento.php">Consultar Fotos de Eventos</a></li>
              <li><a href="/admin/eventos/eventosInativos.php">Consultar Eventos Inativos</a></li>
              <li><a href="/admin/eventos/imagensInativas.php">Consultar Fotos Inativas</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Informativos</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/informativos/cadastrar.php">Cadastrar Informtivos</a></li>
              <li><a href="/admin/informativos/">Consultar Informativos</a></li>
              <li><a href="/admin/informativos/autorizar.php">Autorizar</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Pragas</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/pragas/cadastrar.php">Cadastrar Praga</a></li>
              <li><a href="/admin/pragas/">Consultar Pragas</a></li>
              <li><a href="/admin/pragas/pragasInativas.php">Autorizar</a></li>
            </ul>
          </li>
          <?php

              }

          ?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Anuncios</span>
              </a>
              
            <ul class="sub">
              <li><a href="/admin/classificados/autorizar.php">Autorizar</a></li>
              <li><a href="/admin/classificados/">Autorizados</a></li>
            </ul>
          </li>
          <!-- resto do menu lateral 
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        -->
        <!-- sidebar menu end-->
      </div>
    </aside>