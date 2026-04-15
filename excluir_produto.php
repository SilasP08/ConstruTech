<?php
require_once 'init.php';

$id = $_GET['id'];

foreach ($_SESSION['produtos'] as $index => $produto) {

    if ($produto['id'] == $id) {
        unset($_SESSION['produtos'][$index]);
        break;
    }
}

$_SESSION['produtos'] = array_values($_SESSION['produtos']);

header('Location: estoque.php');
exit;