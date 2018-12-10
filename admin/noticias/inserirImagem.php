<?php

require("uploadImagem.php");
require("../../util/conexao.php");


$foto = $novoNome;
$id = $_POST["idEvento"];
$tipo = $_POST['tipo'];


try {

    $sql = "INSERT INTO arquivo_noticia(id_noticia, arquivo, imagem, ativo) VALUES (?,?,?,?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->bindValue(2, $foto);
    $stmt->bindValue(3, $tipo);
    $stmt->bindValue(4, 1);

    $stmt->execute();

    $msg = "Arquivo Cadastrado com sucesso!";
    
    header("Location: /admin/noticias/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}


?>