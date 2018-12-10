<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$foto = $novoNome;
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$descricao = $_POST["descricao"];


try {

    $sql = "INSERT INTO eventos(titulo, descricao, data, capa, ativo) VALUES (?,?,?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $descricao);
    $stmt->bindValue(3, $data);
    $stmt->bindValue(4, $foto);
    $stmt->bindValue(5, 1);

    $stmt->execute();

    $msg = "Imagem Cadastrada com sucesso!";

    header("Location: /admin/eventos/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>