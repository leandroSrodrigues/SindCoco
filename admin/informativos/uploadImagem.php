<?php
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado uma imagem
if ( isset( $_FILES[ 'pdf' ][ 'name' ] ) && $_FILES[ 'pdf' ][ 'error' ] == 0 ) {
    echo 'Você enviou o PDF: <strong>' . $_FILES[ 'pdf' ][ 'name' ] . '</strong><br />';
    echo 'Esta PDF é do tipo: <strong > ' . $_FILES[ 'pdf' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'pdf' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'pdf' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $imagem_tmp = $_FILES[ 'pdf' ][ 'tmp_name' ];
    $nome = $_FILES[ 'pdf' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png;.pdf', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../../pdf/informativos/' . $novoNome;
 
        // tenta mover o imagem para o destino
        if ( @move_uploaded_file ( $imagem_tmp, $destino ) ) {
            echo 'PDF salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }
        else
            echo 'Erro ao salvar o imagem. Aparentemente você não tem permissão de escrita.<br />';
    }
    else{
        $msg = 'Você poderá enviar apenas PDF "*.jpg;*.jpeg;*.gif;*.png"<br />';
        header("Location: /admin/eventos/index.php?msg=".$msg);
    }
}
else{
    $msg = 'Você não enviou nenhum imagem!';
    header("Location: /admin/eventos/index.php?msg=".$msg);
}
?>