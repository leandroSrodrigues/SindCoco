<?php

require("uploadImagem.php");
require("../../util/conexao.php");


$foto = $novoNome;
$id = $_POST["idEvento"];


try {

    $sql = "INSERT INTO imagem_evento(id_evento, imagem, ativo) VALUES (?,?,?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->bindValue(2, $foto);
    $stmt->bindValue(3, 1);

    $stmt->execute();

    $msg = "Imagem Cadastrada com sucesso!";
    
    header("Location: /admin/eventos/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}


?>