<?php

require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ids = array_column($_SESSION['produtos'], 'id');
    $novoid = $ids ? max($ids) + 1 : 1;
    $_SESSION['produtos'][] = [
        'id' => $novoid,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'cat' => $_POST['cat'],
        'qtd' => $_POST['qtd'],
        'imagem' => $_POST['imagem'],
        'desc' => $_POST['desc']
    ];
    header('location: estoque.php?produtoadd=1');
    exit;
}
;

// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/cadastro_produto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Document</title>
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
                <nav class="">
                    <ul>
                        <li>
                            <a href="admin.php">
                                <i class="bi bi-bar-chart-line-fill"></i> Painel de Controle
                            </a>
                        </li>

                        <li class="active">
                            <a href="estoque.php">
                                <i class="bi bi-archive-fill"></i> Estoque
                            </a>
                        </li>

                        <li>
                            <a href="vendas.html">
                                <i class="bi bi-receipt"></i> Vendas
                            </a>
                        </li>

                        <li>
                            <a href="funcionarios.html">
                                <i class="bi bi-person-vcard"></i>Funcionarios
                            </a>
                        </li>
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
                <h2>Painel de Controle</h2>
                <span>ConstruTech</span>
            </div>
            <div class="container">
                <div class="form-card">
                    <h2>Cadastrar Novo Produto</h2>

                    <form action="cadastro_produto.php" method="POST">
                        <div class="form-group">
                            <label>Nome do Produto</label>
                            <input type="text" placeholder="Digite o nome do produto" name="nome">
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Categoria</label>
                                <select name="cat">
                                    <option value="">Selecione</option value="">
                                    <option value="Bruto">Produtos Brutos</option>
                                    <option value="Ferramentas">Ferramentas</option>
                                    <option value="Acabamento">Acabamento</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Preço (R$)</label>
                                <input type="number" step="0.01" min="0" placeholder="0.00" name="preco">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Quantidade em Estoque</label>
                                <input type="number" placeholder="0" name="qtd">
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Imagem do Produto</label>
                            <input type="text" placeholder="Coloque o caminho da imagem ou URL" name="imagem"
                                accept="image/*">
                        </div>

                        <div class="form-group">
                            <label>Descrição do Produto</label>
                            <textarea name="desc" placeholder="Digite uma descrição detalhada do produto..."></textarea>
                        </div>

                        <button class="btn">Cadastrar Produto</button>


                    </form>
                    <a href="estoque.php" class="btn-voltar">Voltar</a>
                </div>

            </div>
        </div>
    </main>

    <?php
    require_once './partials/footer.php'
    ?>

</body>

</html>