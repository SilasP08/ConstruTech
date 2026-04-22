<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $construtech = "admin@admin.constech";
    $senha_certa = "123";
    if ($email === $construtech and $senha === $senha_certa) {

        header("Location: admin.php");
        exit;

    } else {
        echo "Acesso negado senha ou email incorretos";
    }
}
?>