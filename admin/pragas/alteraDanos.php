<?php

require("../../util/conexao.php");


$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];


try {

    $sql = "UPDATE danos_praga SET nome = ?, descricao = ? where id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $descricao);
    $stmt->bindValue(3, $id);

    $stmt->execute();

    $msg = "Informações de pragas alteradas com sucesso!";
    
    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}

?>