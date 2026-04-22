<?php

require_once 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estoque.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title><?php echo $nomeEmp ?> - Admin Dashboard</title>
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

    <?php
    if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1') {
        print '<p class="aviso"> Produto Adicionado com Sucesso!! </p>';
    }
    ;

    ?>
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
                            <li class="active">
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
                <h2>Estoque</h2>
                <span>ConstruTech</span>
            </div>

            <section>
                <div class="conteudo">
                    <div class="estoque">

                        <div class="cabecalho">
                            <div>Produto</div>
                            <div>Preço</div>
                            <form method="GET">
                                <div class="cabecalho-select">
                                    <div class="select-selected">
                                        <?php
                                        if ($categoria_get !== '' && isset($categoria[$categoria_get])) {
                                            echo $categoria[$categoria_get], '<i class="bi bi-caret-down-fill"></i>';
                                        } else {
                                            echo 'Categoria<i class="bi bi-caret-down-fill"></i>';
                                        }
                                        ?>
                                    </div>
                                    <div class="select-options">
                                        <div data-value="" class="<?= $categoria_get === '' ? 'active-option' : '' ?>">
                                            Categoria
                                        </div>

                                        <?php foreach ($categoria as $kat => $nome): ?>
                                            <div data-value="<?= $kat ?>"
                                                class="<?= $categoria_get === $kat ? 'active-option' : '' ?>">
                                                <?= $nome ?>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                                <!-- <select onchange="filtrarCategoria(this.value)">

                                    <option value="">Categoria<i class="bi bi-caret-down-fill"></i></option>

                                    <?php
                                    foreach ($categoria as $kat => $nome) {
                                        $selected = ($categoria_get === $kat) ? 'selected' : '';
                                        echo "<option value='$kat' $selected>$nome</option>";
                                    }
                                    ?>

                                </select> -->

                            </form>

                            <div>Quantidade</div>
                            <div>Preço Total</div>
                        </div>

                        <div id="tabelaProdutos">

                            <?php

                            foreach ($_SESSION['produtos'] as $produto) {

                                $cor = '';

                                if ($produto['qtd'] >= $nivel_max) {
                                    $simbol = '<i style="color: green; margin-right: 10px;" class="bi bi-check-circle-fill"></i>';
                                } elseif ($produto['qtd'] <= $nivel_min) {
                                    $simbol = '<i style="color: red; margin-right: 10px;" class="bi bi-exclamation-triangle-fill"></i>';
                                } else {
                                    $simbol = '<i style="color: yellow; margin-right: 10px; font-size:" class="bi bi-exclamation-diamond-fill"></i>';
                                }

                                $json = htmlspecialchars(json_encode($produto), ENT_QUOTES, 'UTF-8');


                                if ($categoria_get === '' || $produto['cat'] === $categoria_get) {
                                    print '
                                <div class="linha">
                                    <div class="produto">' . $produto['nome'] . '</div>
                                    <div class="preco">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</div>
                                    <div class="categoria">' . $produto['cat'] . '</div>
                                    <div class="quantidade">
                                        <span class="qtd">
                                            ' . $simbol . $produto['qtd'] . '
                                        </span>
                                    </div>

                                    <div class="preco-total">
                                        R$ ' . number_format(($produto['preco'] * $produto['qtd']), 2, ',', '.') . '

                                        <i class="bi bi-pencil-square btn-editar"
                                        onclick=\'abrirModal(' . $json . ')\'></i>
                                    </div>
                                </div>
                                ';
                                }


                                // print_r($_SESSION);
                            }
                            ;
                            ?>

                            <div id="modalProduto" class="modal">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <span class="fechar" onclick="fecharModal()">&times;</span>

                                        <div class="modal-img">
                                            <img id="imgPreview" src="">
                                        </div>

                                        <div class="modal-form">
                                            <h2>Editar Produto</h2>

                                            <form method="POST" action="editar_produto.php">
                                                <input type="hidden" name="id" id="id">
                                                <div class="input-group">
                                                    <input type="text" name="nome" id="nome" required>
                                                    <label for="nome">Nome do Produto</label>
                                                </div>

                                                <div class="input-group">
                                                    <input type="number" step="0.01" name="preco" id="preco" required>
                                                    <label for="preco">Preço</label>
                                                </div>

                                                <div class="input-group">
                                                    <select name="cat" id="cat" required>
                                                        <option value="" disabled selected hidden>Selecione</option>
                                                        <option value="Bruto">Bruto</option>
                                                        <option value="Ferramentas">Ferramentas</option>
                                                        <option value="Acabamento">Acabamento</option>
                                                    </select>
                                                    <label for="cat">Categoria</label>
                                                </div>

                                                <div class="input-group">
                                                    <input type="number" name="qtd" id="qtd" required>
                                                    <label for="qtd">Quantidade</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" placeholder="Coloque o caminho da imagem ou URL"
                                                        name="imagem" accept="image/*" id="imagem">
                                                    <label for="imagem">URL da Imagem</label>
                                                </div>
                                                <div class="input-group">
                                                    <textarea name="desc" id="desc"></textarea required>
                                                    <label for="desc">Descrição</label>
                                                </div>
                                                <div class="botoes">
                                                    <button type="submit" class="btn-salvar">
                                                        Salvar Alterações
                                                    </button>

                                                    <button type="button" class="btn-excluir"
                                                        onclick="excluirProduto()">
                                                        <span><i class="bi bi-trash3-fill"></i>Excluir</span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <?php
                            $total = 0;
                            $total_total = 0;
                            $qtd_total = 0;
                            $categoria_nome = 'Todas';

                            if ($categoria_get !== '' && isset($categoria[$categoria_get])) {
                                $categoria_nome = $categoria[$categoria_get];
                            }
                            foreach ($_SESSION['produtos'] as $produto) {

                                if ($categoria_get === '' || $produto['cat'] === $categoria_get) {
                                    $soma = ($produto['preco'] * $produto['qtd']);
                                    $total = $total + $produto['preco'];
                                    $total_total = $total_total + $soma;
                                    $qtd_total = $qtd_total + $produto['qtd'];
                                }
                            }
                            print '
                              <div class="rodape-tabela">
                                <div class="valor">Valor Total: </div>
                                <div class="preco-final"> R$ ' . ($total == 0 ? '--' : number_format($total, 2, ',', '.')) . '</div>
                                <div class="#">' . $categoria_nome . '</div>
                                <div class="quantidade-final">' . ($qtd_total == 0 ? '--' : $qtd_total) . '</div>
                                <div class="preco-total-final"> R$ ' . ($total_total == 0 ? '--' : number_format($total_total, 2, ',', '.')) . '</div>
                            ';


                            ?>
                        </div>
                    </div>

                    <div class="estoque-header">
                        <input type="text" id="searchProduto" placeholder="Buscar produto...">
                        <a href="cadastro_produto.php"><i class="bi bi-plus"></i> Adicionar</a>
                    </div>
                </div>
        </div>
        </section>
        </div>
    </main>

    <?php
    require "./partials/footer.php";
    ?>

    <script src="./JS/logoutModal.js"></script>
    <script src="./JS/estoque.js"></script>
</body>

</html>