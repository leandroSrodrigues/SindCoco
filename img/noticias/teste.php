<?php

    require("../../util/conexao.php");

    $sql = "SELECT id FROM noticias";
	$noticia = $conexao->query($sql);
	foreach ($noticia as $linha) {
        
        $filename = $linha["id"].".jpg";
        if(file_exists($filename)){
    
            $sql = "UPDATE noticias SET imagem = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $filename);
            $stmt->bindValue(2, $linha["id"]);
            $stmt->execute();

        }
    }

?>