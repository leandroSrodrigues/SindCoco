<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$nome;
$descricao = $_POST["descricao"];

if(strcasecmp($_POST['nome'], "") == 0 || $_POST['nome'] == null){
    $nome = "Descricao";
}else{
    $nome = $_POST['nome'];
}


try {

    $sql = "INSERT INTO danos_praga(id_praga, descricao, nome) values (?,?,?)";

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
    $stmt->bindValue(3, $nome);

    $stmt->execute();

    $msg = "Distribuição da Praga cadastrada com sucesso!";

    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>