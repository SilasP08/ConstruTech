<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $construtech = "admin@admin.constech";

    if ($email === $construtech) {

        header("Location: admin.php");
        exit;

    } else {
        echo "Acesso permitido apenas para emails admin@admin.constech";
    }
}
?>