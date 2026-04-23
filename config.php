<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'limpar_estoque') {
        $_SESSION['produtos'] = [];
        $_SESSION['success'] = "Estoque limpo com sucesso!";

        header("Location: config.php");
        exit;
    }

    $contato = $_POST['contato'] ?? '';
    $contato = preg_replace('/\D/', '', $contato);

    if (strlen($contato) < 10 || strlen($contato) > 11) {
        $_SESSION['error'] = "Contato inválido! Digite um telefone válido.";
        header("Location: config.php");
        exit;
    }

    $_SESSION['config']['contato'] = $_POST['contato'];
    $_SESSION['config']['empresa'] = $_POST['empresa'];
    $_SESSION['config']['gerente'] = $_POST['gerente'];


    $_SESSION['success'] = "Configurações salvas com sucesso!";

    header("Location: config.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/config.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <title><?php echo $nomeEmp  ?> - Configurações</title>
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
                            <li >
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
                <h2>Configurações do Sistema</h2>
                <span>ConstruTech</span>
            </div>

            <div class="config-grid">
                <div class="config-box">
                    <h3>Configurações Gerais</h3>
                    
                    <?php if(isset($_SESSION['success'])): ?>
                        <div class="alert-success">
                            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['error'])): ?>
                        <div class="alert-error">
                            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="input-group">
                            <label>Nome da Empresa</label>
                            <input type="text" name="empresa" value="<?= $nomeEmp ?>">
                        </div>

                        <div class="input-group">
                            <label>Gerente</label>
                            <input type="text" name="gerente" value="<?= $nome_admin ?>">
                        </div>

                        <div class="input-group">
                            <label>Contato</label>
                            <input 
                                type="tel" 
                                name="contato"
                                pattern="\(?\d{2}\)?[\s-]?\d{4,5}-?\d{4}"
                                placeholder="(11) 99999-9999"
                                value="<?= $_SESSION['config']['contato'] ?? '' ?>"
                            >
                        </div>

                        <button class="btn-save">
                            Salvar alterações
                        </button>
                    </form>
                </div>

                <div class="config-box">
                    <h3>Ações do Sistema</h3>

                    <div class="action-item">
                        <div class="input-container">
                            <strong>Limpar Estoque</strong>
                            <p>Remove todos os produtos</p>
                        </div>
                        <form method="POST" onsubmit="return confirm('Tem certeza que deseja limpar o estoque?');">
                            <input type="hidden" name="action" value="limpar_estoque">
                            <button class="btn-action danger">Limpar</button>
                        </form>
                    </div>
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