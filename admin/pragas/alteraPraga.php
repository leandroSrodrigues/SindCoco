<?php

require("../../util/conexao.php");


$id = $_POST["id"];
$nome = $_POST["nome"];
$nomeC = $_POST["nome_cientifico"];


try {

    $sql = "UPDATE pragas SET nome = ?, nome_cientifico = ? where id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $nomeC);
    $stmt->bindValue(3, $id);

    $stmt->execute();

    $msg = "Informações de pragas alteradas com sucesso!";
    
    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}

?>