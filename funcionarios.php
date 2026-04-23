<?php
require_once 'init.php';

$funcionarios = $_SESSION['funcionarios'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/funcionarios.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <title><?php echo $nomeEmp  ?> - Funcionários</title>
</head>
<body>
    <header>
       <div class="logo-header">
            <img src="Imagem/logo.png" alt="">
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

                        <a href="vendas.php">
                            <li>
                                <i class="bi bi-receipt"></i> Vendas
                            </li>
                        </a>

                        <a href="funcionarios.php">
                            <li class="active">
                                <i class="bi bi-person-vcard"></i>Funcionarios
                            </li>
                        </a>

                        <a href="config.php">
                            <li>
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

                        <a href="index.php">
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
                <h2>Funcionários</h2>
                <span><?= $nomeEmp ?></span>
            </div>

            <div class="employee-container">

                <div class="employee-card">

                    <div class="employee-header">
                        <h3>Lista de Funcionários</h3>
                    </div>

                    <!-- CABEÇALHO -->
                    <div class="header">
                        <div>Nome</div>
                        <div>Cargo</div>
                        <div>Salário</div>
                        <div>Vendas</div>
                    </div>

                    <!-- LISTA -->
                     
                    <?php foreach($funcionarios as $f): ?>
                        <div class="linha">
                            <div><?= $f['nome'] ?></div>
                            <div class="cargo"><?= $f['cargo'] ?></div>
                            <div>R$ <?= number_format($f['salario'], 2, ',', '.') ?></div>
                            <div class="vendas"><?= $f['vendas'] ?></div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </main>

    <?php
    require_once "./partials/footer.php";
    ?>

    <script src="./JS/logoutModal.js"></script>
</body>
</html>