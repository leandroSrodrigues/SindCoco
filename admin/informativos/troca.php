<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$id = $_POST["id"];


try {

    $sql = "UPDATE informativos SET arquivo = ? WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $pdf);
    $stmt->bindValue(2, $id);
    

    $stmt->execute();

    $msg = "Informativo cadastrado com sucesso!";

    header("Location: /admin/informativos/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>