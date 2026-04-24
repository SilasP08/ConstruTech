<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="x-icon" href="./Imagem/icone.png"> <title><?= $nomeEmp ?> - Vendas</title>

    <link rel="stylesheet" href="CSS/vendas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
</head>

<body>

    <header>
        <div class="logo-header">
            <img src="Imagem/logo.png">
        </div>

        <div class="search-header">
            <input type="text" placeholder="Pesquisar...">
            <i class="bi bi-search"></i>
        </div>

        <div class="img-user-header">
            <img src="Imagem/login-user.jpg">
            <p><?= $nome_admin ?></p>
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
                            <li class="active">
                                <i class="bi bi-receipt"></i> Vendas
                            </li>
                        </a>

                        <a href="funcionarios.php">
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
                <h2>Vendas</h2>
                <span><?= $nomeEmp ?></span>
            </div>

            <div class="list-container">
                <div class="current-sales">
                    <div class="current-sales-title">
                        <h2>Vendas em Andamento</h2>
                    </div>

                    <div class="header">
                        <div>Pedido</div>
                        <div>Cliente</div>
                        <div>Status</div>
                        <div>Produto</div>
                        <div>Vendedor</div>
                        <div>Total</div>
                    </div>

                    <div class="linha">
                        <div>#9237</div>
                        <div>Claudio Almeida</div>
                        <div class="status pendente">Pendente</div>
                        <div>Martelo</div>
                        <div>Vicente Souza</div>
                        <div>R$ 645,00</div>
                    </div>

                    <div class="linha">
                        <div>#9236</div>
                        <div>Maria Souza</div>
                        <div class="status cancelado">Cancelado</div>
                        <div>Cimento</div>
                        <div>Carlos Lima</div>
                        <div>R$ 120,00</div>
                    </div>
                </div>

                <div class="sales-history">
                    <div class="sales-history-title">
                        <h2>Histórico de Vendas</h2>
                    </div>

                    <div class="header">
                        <div>Pedido</div>
                        <div>Cliente</div>
                        <div>Status</div>
                        <div>Produto</div>
                        <div>Vendedor</div>
                        <div>Total</div>
                    </div>

                    <div class="linha">
                        <div>#9235</div>
                        <div>Alceu Domingues</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Tinta Acrílica 18L</div>
                        <div>Giodásio Filho</div>
                        <div>R$ 189,90</div>
                    </div>

                    <div class="linha">
                        <div>#9234</div>
                        <div>Pedro Moles</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Areia (m³)</div>
                        <div>Maria das Dores</div>
                        <div>R$ 120,00</div>
                    </div>

                    <div class="linha">
                        <div>#9233</div>
                        <div>Will Trindade</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Furadeira Elétrica</div>
                        <div>Ana Costa</div>
                        <div>R$ 249,90</div>
                    </div>

                    <div class="linha">
                        <div>#9232</div>
                        <div>Américo Firmino</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Chave de Fenda</div>
                        <div>Natal Silverio</div>
                        <div>R$ 14,50</div>
                    </div>

                    <div class="linha">
                        <div>#9231</div>
                        <div>Luis Scott</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Cimento 50Kg</div>
                        <div>Raissa Carvalho</div>
                        <div>R$ 38,90</div>
                    </div>

                    <div class="linha">
                        <div>#9230</div>
                        <div>Alice Nave</div>
                        <div class="status aprovado">Aprovado</div>
                        <div>Tinta</div>
                        <div>Giodásio Filho</div>
                        <div>R$ 80,00</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once "./partials/footer.php"; ?>

</body>
</html>