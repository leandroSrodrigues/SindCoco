<?php

require "../../util/conexao.php";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$adm = $_POST["adm"];


try {

    $sql = "INSERT INTO usuario(nome, login, senha, adm) VALUES (?,?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $login);
    $stmt->bindValue(3, $senha);
    $stmt->bindValue(4, $adm);

    $stmt->execute();

    $msg = "Usuario Cadastrado com sucesso!";

    header("Location: /admin/usuarios/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>