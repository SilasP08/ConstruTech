<?php

require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $ids = array_column($_SESSION['produtos'], 'id');
    $novoid = $ids ? max($ids) + 1 : 1;
    $_SESSION['produtos'][]=[
        'id'=> $novoid,
        'nome'=> $_POST['nome'],
        'preco'=> $_POST['preco'],
        'cat'=> $_POST['cat'],
        'qtd'=> $_POST['qtd']
    ];
    header('location: teste.php?produtoadd=1');
    exit;
};

print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro_protudos.php" method="POST">
        <input type="text" placeholder="nome" name="nome">
        <input type="number" name="preco">
        <input type="cat" name="cat">
        <input type="number" name="qtd">
        <button>enviar</button>
    
    </form>
</body>
</html>