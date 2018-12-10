<? include "admin/inc/conecta.php" ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="SINDCOCO - Sindicato Nacional dos Produtores de Coco do Brasil - Av. Barbosa Lima nº 149, Edifício Alfredo Fernandes, 3º andar, Salas  307/308 – Recife Antigo" />
<meta name="keywords" content="sindicatos, sindcato, sindicato, coco, coqueiro, palmeira, frutos, copra, sementes, mudas, subprodutos, nacional, produtores, dende, butia, buriti, tucum, macauba, macaiba, ouricuri, piaçava, babaçu, recife, pe" />
<meta name="distribution" content="Global" />
<meta name="Googlebot" content="all" />
<meta name="robots" content="all" />
<meta name="author" content="w2u: fernando@w2u.com.br" />
<meta name="service" content="Sindicato Nacional dos Produtores de Coco do Brasil" />
<title>SINDCOCO - Sindicato Nacional dos Produtores de Coco do Brasil</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script language="javascript" src="js/flash.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.slide.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
</head>
<body>
<div id="corpo">
	<div id="header">
    <? include "topo.php" ?>
    </div>
    <?
    include "menu.php";
	include "banner.php";
	?>
    
    <div id="conteudo">
    	<div class="in">
         	<div id="col01">  
            	
                
   			  <h2>Galeria de Fotos</h2>
              <?
				$sqlNOT2="select * from eventos where id=".$_GET['id']." ORDER BY id desc";
				//echo $sqlNOT2;
				$consultaNOT2 = mysql_query($sqlNOT2, $con);
				while ($arrNOT2= mysql_fetch_array($consultaNOT2, MYSQL_ASSOC)){
				$tituloNOT2 = $arrNOT2['titulo'];
				$idNOT2 = $arrNOT2['id'];
				$descricaoNOT2 = $arrNOT2['descricao'];
				$dataNOT2 = $arrNOT2['data'];
				?>
              <div id="headerDestaques" style="border-bottom:1px dashed #CCC;">
               	<img src="imgs/eventos/imagem.php?imagem=<?=$idNOT2?>.jpg&l=310&a=200" class="imgDestaque">
                <h3 class="h3Verde"><?=$tituloNOT2?></h3>
                <?=$descricaoNOT2?>
                <div class="esp" style="height:10px;"></div>
               </div>
              <?
			  	}
			   // Consulta os dados das Lojas                      ******************
				$sqlFt="select * from fotos where idEvento=".$_GET['id'];
				$consultaFt = mysql_query($sqlFt, $con);
				//echo $sqlFt;
				while ($arrFtEv= mysql_fetch_array($consultaFt, MYSQL_ASSOC)){
				$idFoto = $arrFtEv['id'];
				$tituloFoto = $arrFtEv['titulo'];
				$idEvento = $arrFtEv['idEvento'];
				$descricao = $arrFtEv['descricao'];
				?>
               
           	<a href="imgs/fotos/imagem.php?imagem=<?=$idFoto?>.jpg&l=800&a=600" class="cxsFtosEvs" rel="lightbox[fotos]" >
                	<img src="imgs/fotos/imagem.php?imagem=<?=$idFoto?>.jpg&l=186&a=140" />
                </a>
                <? } ?>
                
                
               	<span class="esp"></span>
              
              
              
   			  <a href="javascript:history.go(-1)" class="abtnVoltar"><img src="imgs/btn_voltar.jpg" width="86" border="0" height="21"></a>
             
   	  	  </div>
            <div id="col02">
            	<? include "incParceiros.php" ?>
            </div>
            <span class="esp"></span>
      	</div>
        <span class="esp" style="height:20px;"></span>
    </div>
  <div id="rodape">
  	<? include "incRodape.php" ?>
  </div>
    
</div>


<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		
			$('#slider').nivoSlider({
			effect:'fold', //Specify sets like: 'fold,fade,sliceDown'
			slices:15,
			animSpeed:1000,
			pauseTime:5000,
			startSlide:0, //Set starting Slide (0 index)
			directionNav:true, //Next & Prev
			directionNavHide:true, //Only show on hover
			controlNav:true, //1,2,3...
			controlNavThumbs:false, //Use thumbnails for Control Nav
			controlNavThumbsFromRel:false, //Use image rel for thumbs
			controlNavThumbsSearch: '.jpg', //Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
			keyboardNav:true, //Use left & right arrows
			pauseOnHover:true, //Stop animation while hovering
			manualAdvance:false, //Force manual transitions
			captionOpacity:0.8 //Universal caption opacity
		});
		// Navigation
		//  //$('#nav').spasticNav();
	});
</script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
