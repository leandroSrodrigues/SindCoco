<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$descricao = $_POST["descricao"];


try {

    $sql = "INSERT INTO amostragem_praga(id_praga, descricao) values (?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $_POST['idPraga']);
    if((strcasecmp($pdf, "") == 0 || $pdf == null) && (strcasecmp($descricao, "") != 0 || $descricao != null)){
        $stmt->bindValue(2, $descricao);
    }else if((strcasecmp($pdf, "") != 0 || $pdf != null) && (strcasecmp($descricao, "") == 0 || $descricao == null)){
        $stmt->bindValue(2, $pdf);
    }else{
        $msg = "Ocorreu algum erro ao cadastrar!";
        header("Location: /admin/pragas/index.php?msg=".$msg);
    }

    $stmt->execute();

    $msg = "Amostragem cadastrada com sucesso!";

    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>