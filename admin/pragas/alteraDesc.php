<?php

require("../../util/conexao.php");


$id = $_POST["id"];
$nome = $_POST["nome"];


try {

    $sql = "UPDATE descricao_praga SET nome = ? where id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $id);

    $stmt->execute();

    $msg = "Informações de descricao alteradas com sucesso!";
    
    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}

?>