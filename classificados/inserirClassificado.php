<?php

    require("../util/conexao.php");

    require("uploadImagem.php");

    $nome = $_POST["nome"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $email = $_POST["email"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $novoNome;
    $fone = $_POST["telefone"];
    $obs = $_POST["obs"];
    $ativo = 0;

    try {

        $sql = "INSERT INTO anuncio (nome, estado, cidade, email, titulo, descricao, preco, imagem, fone, ativo, obs) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $estado);
        $stmt->bindValue(3, $cidade);
        $stmt->bindValue(4, $email);
        $stmt->bindValue(5, $titulo);
        $stmt->bindValue(6, $descricao);
        $stmt->bindValue(7, $preco);
        $stmt->bindValue(8, $imagem);
        $stmt->bindValue(9, $fone);
        $stmt->bindValue(10, $ativo);
        $stmt->bindValue(11, $obs);

        $stmt->execute();

        $msg = "Anuncio Cadastrado com sucesso!";
        
        header("Location: /classificados/index.php?msg=".$msg);
    } catch (Exception $e) {
        echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
    }



?>