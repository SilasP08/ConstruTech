<?php
require_once 'init.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="x-icon" href="./Imagem/icone.png"> <link rel="stylesheet" href="CSS/style.css">
    <title><?php echo $nomeEmp  ?> - Login</title>
</head>
<body>
    <header>
       <div class="logo-header">
            <img src="Imagem/logo.png" alt="">
        </div>
    </header>

    <main class="login-section">
        <div class="login-container">
            <div class="login-card">
                <h2>Login</h2>

                <form action="verificacao_login.php" method="POST">
                      
                    <div class="input-box">
                        <input type="email" name="email" required/>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="senha" required/>
                        <label>Senha</label>
                    </div>

                    <div class="options-login">
                        <label>
                        <input type="checkbox" /> Lembrar de mim
                        </label>
                        <a href="#">Esqueceu o Breno?</a>
                    </div>

                    
                    <button type="submit" class="btn-login">
                       Entrar
                    </button>
                </form>
            </div>

            <div class="cadastro-card">
                <div class="cadastro-txt">
                    <h2>ConstruTech</h2>
                    <p>Faça login para utilizar nosso sistema!</p>
                </div>
            </div>            
        </div>
    </main> 
</body>
</html>