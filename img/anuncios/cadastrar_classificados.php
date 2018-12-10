<?
include_once"admin/inc/conecta.php";

if (isset($_POST["btnEnviar"])){
	
	$titulo = $_POST['titulo'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$obs = $_POST['obs'];
	$d = date("d" , time());
	$a = date("Y" , time());
	$m = date('m' , time());
	
	$data = date("Y-m-d");
	$hora = date("H:i:s");
	$dataInset = $data." ".$hora;
		

	$texto = $_POST['elm1'];
	
	if ($con=== false){
		echo "ocorreram os seguintes erros:<br>". mysql_error($con);
	}
	
	
	$sql= "insert into  classificados_membros (nome, email, fone, cidade, estado, titulo, descricao, preco, obs, data, dia, mes, ano) values ('".$nome."','".$email."','".$fone."','".$cidade."',".$estado.",'".$titulo."','".$descriao."','".$preco."','".$obs."','".$dataInset."',".$d.",".$m.",".$a.")";
	mysql_query($sql, $con);
	$ultimo_id = mysql_insert_id($con);
	
	echo $sql;

	if(isset($_FILES["foto"])){
		if(is_uploaded_file($_FILES["foto"]["tmp_name"])) {
			$local = "sindcoco.com.br/imgs/anuncios/";
        	$con = ftp_connect($servidor_ftp);
        	$login = ftp_login($con, $usuario_ftp, $senha_ftp);
        	ftp_chdir($con, $local);
        	if (ftp_put($con, $_FILES["foto"]["name"], $_FILES["foto"]["tmp_name"], FTP_ASCII)){
				//echo"";
				echo "<script>alert('Cadastro realizado com sucesso!');
					window.location='cadastroAnuncio.php?id=".$ultimo_id."'</script>";
				$nome_arquivo = rename('../imgs/anuncios/'.$_FILES["foto"]["name"] , '../imgs/anuncios/'.$ultimo_id . '.jpg');
				}
        	//else
        		//echo "<span class='paragrafo'><br>Ocorreu um erro ao tentar emviar a foto! </span>";
        	ftp_close($con);
			//header ("Location:cadastro.php?id=".$ultimo_id."");
	}
 }
}
?>