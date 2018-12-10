<?php

// Conexão Local

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

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