<?php

    session_start(); //iniciamos a sessão que foi aberta
    
    session_destroy(); //destruimos a sessão ;)
    
    session_unset(); //limpamos as variaveis globais das sessões

    header("Location: /admin/index.php"); //leva para o formulário de login

?>