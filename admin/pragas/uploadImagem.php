<?php
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado uma imagem
if ( isset( $_FILES[ 'imagem' ][ 'name' ] ) && $_FILES[ 'imagem' ][ 'error' ] == 0 ) {
    echo 'Você enviou a imagem: <strong>' . $_FILES[ 'imagem' ][ 'name' ] . '</strong><br />';
    echo 'Esta imagem é do tipo: <strong > ' . $_FILES[ 'imagem' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'imagem' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'imagem' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $imagem_tmp = $_FILES[ 'imagem' ][ 'tmp_name' ];
    $nome = $_FILES[ 'imagem' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../../img/pragas/' . $novoNome;
 
        // tenta mover o imagem para o destino
        if ( @move_uploaded_file ( $imagem_tmp, $destino ) ) {
            echo 'imagem salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }
        else
            echo 'Erro ao salvar o imagem. Aparentemente você não tem permissão de escrita.<br />';
    }
    else{
        $msg = 'Você poderá enviar apenas imagens "*.jpg;*.jpeg;*.gif;*.png"<br />';
        echo $msg;
    }
}
else{
    $msg = 'Você não enviou nenhum imagem!';
    echo $msg;
}
?>