<?php

    require("conexao.php");

    $nome = "admin";
    $login = "teste";
    $senha = md5("123456");

    //$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario(nome, login, senha, adm) VALUES (?,?,?,?)";
        
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $login);
    $stmt->bindValue(3, $senha);
    $stmt->bindValue(4, 1);
    $stmt->execute();

?>