<?php

session_start();

require_once 'data.php';

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $produtos_gerais;
};

if (!isset($_SESSION['funcionarios'])) {
    $_SESSION['funcionarios'] = $funcionarios;
}

if (!isset($_SESSION['config'])) {
    $_SESSION['config'] = [
        'empresa' => 'ConstruTech',
        'gerente' => 'Admin',
        'estoque_alto' => 100,
        'estoque_baixo' => 50
    ];
}
$nomeEmp = $_SESSION['config']['empresa'];
$nome_admin = $_SESSION['config']['gerente'];
$nivel_max = $_SESSION['config']['estoque_alto'];
$nivel_min = $_SESSION['config']['estoque_baixo'];
// session_destroy();