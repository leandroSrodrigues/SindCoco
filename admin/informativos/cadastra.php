<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$autorizado = 1;


try {

    $sql = "INSERT INTO informativos(titulo, data, arquivo, autorizado) VALUES (?,?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $data);
    $stmt->bindValue(3, $pdf);
    $stmt->bindValue(4, $autorizado);

    $stmt->execute();

    $msg = "Informativo cadastrado com sucesso!";

    header("Location: /admin/informativos/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>