<?php
require_once 'init.php';

foreach ($_SESSION['produtos'] as &$produto) {

    if ($produto['id'] == $_POST['id']) {

        $produto['nome'] = $_POST['nome'];
        $produto['preco'] = $_POST['preco'];
        $produto['cat'] = $_POST['cat'];
        $produto['qtd'] = $_POST['qtd'];
        $produto['imagem'] = $_POST['imagem'];
        $produto['desc'] = $_POST['desc'];

        break;
    }
}

header('Location: estoque.php');
exit;