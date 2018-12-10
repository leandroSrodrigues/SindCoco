<?php

require "../../util/conexao.php";

$titulo = $_POST["titulo"];
$data = $_POST["data"];
$id = $_POST["id"];


try {

    $sql = "UPDATE informativos SET titulo = ?, data = ? WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $data);
    $stmt->bindValue(3, $id);

    $stmt->execute();

    $msg = "Informativo Editado com sucesso!";

    header("Location: /admin/informativos/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>