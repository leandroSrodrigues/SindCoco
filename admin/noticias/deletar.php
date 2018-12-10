<?php

require "../../util/conexao.php";

$id = $_GET["id"];

try {

    $sql = "DELETE FROM noticias WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Noticia deletada com sucesso!";

    header("Location: /admin/noticias/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>', $e->getMessage(), "\n";
}

?>