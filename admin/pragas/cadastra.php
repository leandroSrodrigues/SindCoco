<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$nome = $_POST["nome"];
$nomeC = $_POST["nomeCientifico"];


try {

    $sql = "INSERT INTO pragas(imagem, nome, nome_cientifico, aceito) values (?,?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $pdf);
    $stmt->bindValue(2, $nome);
    $stmt->bindValue(3, $nomeC);
    $stmt->bindValue(4, 1);

    $stmt->execute();

    $msg = "Praga cadastrada com sucesso!";

    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>