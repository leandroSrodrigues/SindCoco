<?php

require "../../util/conexao.php";

$id = $_GET["id"];

try {

    $sql = "DELETE FROM usuario WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Usuario Deletado com sucesso!";

    header("Location: /admin/usuarios/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>