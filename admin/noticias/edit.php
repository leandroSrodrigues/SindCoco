<?php

require "../../util/conexao.php";

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$chamada = $_POST["chamada"];
$categoria = $_POST["categoria"];
$texto = $_POST["texto"];
$fonte = $_POST["fonte"];


try {

    $sql = "UPDATE noticias set idCategoria = ?, titulo = ?, data = ?, chamada = ?, fonte = ?, texto = ? where id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $categoria);
    $stmt->bindValue(2, $titulo);
    $stmt->bindValue(3, $data);
    $stmt->bindValue(4, $chamada);
    $stmt->bindValue(5, $fonte);
    $stmt->bindValue(6, $texto);
    $stmt->bindValue(7, $id);

    $stmt->execute();

    $msg = "Notícia editada com sucesso!";

    header("Location: /admin/noticias/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>