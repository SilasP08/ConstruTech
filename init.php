<?php

session_start();

require_once 'data.php';

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $produtos_gerais;
};

if (!isset($_SESSION['funcionarios'])) {
    $_SESSION['funcionarios'] = $funcionarios;
};

if (!isset($_SESSION['config'])) {
    $_SESSION['config'] = [
        'empresa' => 'ConstruTech',
        'gerente' => 'Admin',
        'contato' => '(11) 93056-9806'
    ];
};

$nomeEmp = $_SESSION['config']['empresa'];
$nome_admin = $_SESSION['config']['gerente'];
$contato = $_SESSION['config']['contato'];

// session_destroy();