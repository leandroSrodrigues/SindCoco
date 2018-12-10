<?php

    require("../../util/conexao.php");

    $sql = "SELECT id FROM informativos";
	$noticia = $conexao->query($sql);
	foreach ($noticia as $linha) {
        
        $filename = $linha["id"].".pdf";
        if(file_exists($filename)){
    
            $sql = "UPDATE informativos SET arquivo = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $filename);
            $stmt->bindValue(2, $linha["id"]);
            $stmt->execute();

        }
    }

?>