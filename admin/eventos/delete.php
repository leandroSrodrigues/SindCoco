<?php

require "../../util/conexao.php";

$id = $_GET['id'];

try {

    $sql = "DELETE FROM eventos WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Evento com sucesso!";

    header("Location: /admin/eventos/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>