<?php

require("../../util/conexao.php");


$id = $_GET["id"];


try {

    $sql = "UPDATE imagem_evento SET ativo = 0 WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Imagem nesse evento inativada com sucesso com sucesso!";
    
    header("Location: /admin/eventos/imagensEvento.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>',  $e->getMessage(), "\n";
}


?>