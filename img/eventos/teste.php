<?php

    require("../../util/conexao.php");

    $sql = "SELECT id FROM eventos";
	$noticia = $conexao->query($sql);
	foreach ($noticia as $linha) {
        
        $filename = $linha["id"].".jpg";
        if(file_exists($filename)){
    
            $sql = "UPDATE eventos SET capa = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $filename);
            $stmt->bindValue(2, $linha["id"]);
            $stmt->execute();

        }
    }

?>