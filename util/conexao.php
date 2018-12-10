<?php

// Conexão Local

$host = "localhost";
$dbname = "sindcoco";
$usuario = "sindcoco";
$senha = "sindcocoNewSql";

try {
    $conexao = new PDO("mysql:host=$host; dbname=$dbname", "$usuario", "$senha");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
}

?>