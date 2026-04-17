<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['config']['empresa'] = $_POST['empresa'];
    $_SESSION['config']['gerente'] = $_POST['gerente'];
    $_SESSION['config']['estoque_alto'] = $_POST['alto'];
    $_SESSION['config']['estoque_baixo'] = $_POST['baixo'];

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/config.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <title><?php echo $nomeEmp  ?> - Admin Dashboard</title>
</head>
<body>
    <header>
        <div class="logo-header">
            <img src="Imagem/logo_principal.png" alt="">
        </div>

        <div class="search-header">
            <input type="text" placeholder="Pesquisar...">
            <i class="bi bi-search"></i>
        </div>
        
        <div class="img-user-header">
            <img src="Imagem/login-user.jpg" alt="">
            <p><?php echo $nome_admin ?></p>
        </div>
    </header>

    <main>
        <div class="menu-vertical-container">
            <div class="img-user">
                <img src="Imagem/login-user.jpg" alt="">
                <div class="name-user">Bem Vindo de volta <?php echo $nome_admin ?>!</div>
            </div>
            <div class="menu-vertical">
                <nav>
                    <ul>
                        <a href="admin.php">
                            <li>
                                <i class="bi bi-bar-chart-line-fill"></i> Painel de Controle
                            </li>
                        </a>

                        <a href="estoque.php">
                            <li>
                                <i class="bi bi-archive-fill"></i> Estoque
                            </li>
                        </a>

                        <a href="vendas.html">
                            <li>
                                <i class="bi bi-receipt"></i> Vendas
                            </li>
                        </a>

                        <a href="funcionarios.html">
                            <li>
                                <i class="bi bi-person-vcard"></i>Funcionarios
                            </li>
                        </a>

                        <a href="config.php">
                            <li class="active">
                                <i class="bi bi-gear-fill"></i>Configurações
                            </li>
                        </a>
                    </ul>
                </nav>

                <div class="logout-btn" onclick="abrirModal()">
                    <i class="bi bi-box-arrow-right"></i><a href="#">Logout</a>
                </div>
            </div>
        </div>

        <div id="modalLogout" class="logout-modal">
            <div class="logout-modal-content">

                <span class="fechar" onclick="fecharModal()">&times;</span>

                <div class="logout-modal-body">
                    <div class="modal-icon">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>

                    <h2>Deseja sair da conta?</h2>

                    <p>Você será desconectado do sistema.</p>

                    <div class="botoes-modal">

                        <button class="btn-cancelar" onclick="fecharModal()">
                            Cancelar
                        </button>

                        <a href="logout.php">
                            <button class="btn-sair">
                                Sair
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="content-title">
                <h2>Configurações</h2>
                <span>ConstruTech</span>
            </div>
        </div>
    </main>

    <form method="POST">
    <input type="text" name="empresa">
    <input type="text" name="gerente">
    <input type="number" placeholder="defina o nivel maximo ou estoque alto" name="alto">
    <input type="number" placeholder="defina o nivel minimo ou estoque baixo" name="baixo">

    <button type="submit">Salvar</button>
</form>

    <footer>
        <p><i class="bi bi-c-circle"></i> ConstruTech - 2026</p>
    </footer>

    <script src="./JS/logoutModal.js"></script>
</body>
</html>