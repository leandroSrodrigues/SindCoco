Página principal ex.: (index.php)  <<<----------- ARQUIVO
______________________________________________________________________
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "OSystem";
    $conexao = mysqli_connect($host,$user,$pass,$db) or die (mysqli_error());   
?>

//CÓDIGO QUE IRÁ LISTAR EX.:
<?php
    $sql = mysqli_query($conexao, 'select * FROM usuario');
    while ($resp=mysqli_fetch_array($sql)){
        $id = $resp['id_categoria_servico']; 
         echo '<tr> <td>'.$resp['nome'].'</td>    
         <td><a class="label label-info modalDetalhesUsuario" data-a="'.$id.'" data-toggle="modal" href="#detalheUsuario"><b>DETALHES</b></a></td> </tr>';
    }                    
?> 

//SCRIPT JS USANDO AJAX PARA RESGATAR DADOS DE OUTRA PÁGINA
<script>
    $('.modalDetalhesUsuario').click(function(){
      var ID = $(this).attr("data-a");
      $.ajax({url:"paginaModal.php?ID="+ID,cache:false,success:function(result){    
        $(".modal-content").html(result);
      }});
    });
  </script>

//DIV AONDE APARECERÁ O MODAL CHAMADO VIA AJAX          
  <div id="detalheUsuario" class="modal fade modal" role="dialog">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog modal-dialog-view vertical-align-center">
        <div class="modal-content">

        </div>  
      </div>
    </div>
  </div>
______________________________________________________________________


______________________________________________________________________
Página modal ex.: (paginaModal.php)  <<<----------- ARQUIVO
______________________________________________________________________
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "OSystem";
    $conexao = mysqli_connect($host,$user,$pass,$db) or die (mysqli_error());

    //PEGANDO O ID ENVIADO DO AJAX
    $ID = $_GET['ID'];   
?>
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Título Modal</h4>
            </div>
            <div class="modal-body">                              
                <?php  
                    $sql = mysqli_query ($conexao, "SELECT nome FROM usuario WHERE id like '%".$ID."%' ");   
                    $resp = mysqli_fetch_array($sql);   
                    $nome = $resp['nome'];    
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nome do Usuário:</label>   
                        <input type="text" class="form-control" placeholder="<?php echo $nome; ?>" disabled>                             
                    </div>            
                </div>
            </div>                
            <div class="modal-footer">
                <button type="reset" id="cancelar" class="btn btn-default pull-left" data-dismiss="modal" value="reset">FECHAR</button>               
            </div>
        </div>        
    </div>    
</div>
______________________