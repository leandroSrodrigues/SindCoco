<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;

$nome = $_POST['nome'];

$descricao = $_POST["descricao"];


try {

    $sql = "INSERT INTO descricao_praga(id_praga, nome, descricao) values (?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $_POST['idPraga']);
    $stmt->bindValue(2, $nome);
    if(strcasecmp($pdf, "") == 0 || $pdf == null){
        $stmt->bindValue(3, $descricao);
    }else{
        $stmt->bindValue(3, $pdf);
    }

    $stmt->execute();

    $msg = "Descrição da Praga cadastrada com sucesso!";

    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>