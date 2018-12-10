<?php

require("../../util/conexao.php");


$id = $_POST["id"];
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$descricao = $_POST["descricao"];


try {

    $sql = "UPDATE eventos SET descricao = ?, titulo = ?, data = ? where id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $descricao);
    $stmt->bindValue(2, $titulo);
    $stmt->bindValue(3, $data);
    $stmt->bindValue(4, $id);

    $stmt->execute();

    $msg = "Informações do evento alteradas com sucesso!";
    
    header("Location: /admin/eventos/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}

?>