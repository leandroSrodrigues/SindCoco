<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$foto = $novoNome;
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$chamada = $_POST["chamada"];
$categoria = $_POST["categoria"];
$texto = $_POST["texto"];
$fonte = $_POST["fonte"];


try {

    $sql = "INSERT INTO noticias(idCategoria, titulo, data, chamada, fonte, imagem, texto) VALUES (?,?,?,?,?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $categoria);
    $stmt->bindValue(2, $titulo);
    $stmt->bindValue(3, $data);
    $stmt->bindValue(4, $chamada);
    $stmt->bindValue(5, $fonte);
    $stmt->bindValue(6, $foto);
    $stmt->bindValue(7, $texto);

    $stmt->execute();

    $msg = "Notícia Cadastrada com sucesso!";

    header("Location: /admin/noticias/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>