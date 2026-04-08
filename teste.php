<?php

require_once 'init.php';

if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
            print '<p class="aviso"> Produto Adicionado com Sucesso!! </p>';
        };

foreach ($_SESSION['produtos'] as $produtos) {
    print '
    <h1>'.$produtos['id'] .'</h1>
    <h1>'.$produtos['nome'] .'</h1>
    <h1>'.$produtos['preco'] .'</h1>
    <h1>'.$produtos['cat'] .'</h1>
    <h1>'.$produtos['qtd'] .'</h1>
    ';
}