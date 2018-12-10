<?php

require "../../util/conexao.php";

$id = $_GET["id"];

try {

    $sql = "UPDATE noticias SET autorizada = 1 WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Noticia autorizada com sucesso!";

    header("Location: /admin/noticias/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>', $e->getMessage(), "\n";
}

?>