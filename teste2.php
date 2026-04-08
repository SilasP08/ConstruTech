<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="teste.css">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($_SESSION['produtos'] as $produtos) {
            if ($produtos['qtd'] >= 10){
                print '<h1>'.$produtos['nome'].'</h1>';
            } elseif ($produtos['qtd'] >= 6 and $produtos['qtd'] < 10) {
                print '<h2>'.$produtos['nome'].'</h2>';
            } else {
                print '<h3>'.$produtos['nome'].'</h2>';
            }

        }
    ?>
</body>
</html>