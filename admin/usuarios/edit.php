<?php

require "../../util/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$adm = $_POST["adm"];


try {

    $sql = "UPDATE usuario SET nome = ?, login = ?, senha = ?, adm = ? WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $login);
    $stmt->bindValue(3, $senha);
    $stmt->bindValue(4, $adm);
    $stmt->bindValue(5, $id);

    $stmt->execute();

    $msg = "Usuario Editado com sucesso!";

    header("Location: /admin/usuarios/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
?>