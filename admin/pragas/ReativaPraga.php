<?php

require "../../util/conexao.php";

$id = $_GET["id"];

try {

    $sql = "UPDATE pragas SET aceito = 1 WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Praga Reativada com sucesso com sucesso!";

    header("Location: /admin/pragas/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>', $e->getMessage(), "\n";
}

?>