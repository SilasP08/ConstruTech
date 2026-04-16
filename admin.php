<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <title>ConstruTech - Admin Dashboard</title>
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
            <p><?php $nome ?></p>
        </div>
    </header>

    <main>
        
        <!-- Menu Vertical -->
        <div class="menu-vertical-container">
            <div class="img-user">
                <img src="Imagem/login-user.jpg" alt="">
                <div class="name-user">Bem Vindo de volta <?php $nome ?>!</div>
            </div>
            
            <div class="menu-vertical">
                <nav>
                    <ul>
                        <a href="admin.php">
                            <li class="active">
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

                        <a href="config.html">
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
            <div class="cards">
                <div class="card">
                    <h4>Vendas Hoje</h4>
                    <p class="card-value">R$ 1.250</p>
                </div>

                <div class="card">
                    <h4>Produtos</h4>
                    <p class="card-value">320</p>
                </div>

                <div class="card">
                    <h4>Funcionários</h4>
                    <p class="card-value">12</p>
                </div>

                <div class="card">
                    <h4>Receita</h4>
                    <p class="card-value">R$ 25.000</p>
                </div>
            </div>

            <div class="charts">
                <div class="chart-card">
                    <h3>Vendas Mensais</h3>
                    <canvas id="vendasChart"></canvas>
                </div>

                <div class="chart-card">
                    <h3>Produtos em Estoque</h3>
                    <canvas id="estoqueChart"></canvas>
                </div>
            </div>

            <div class="lower-section">
                <div class="chart-card pizza-card">
                    <div class="card-header">
                        <h3>Status de Vendas</h3>
                    </div>

                    <div class="pizza-content">
                        <div class="pizza-container">
                            <canvas id="meuGraficoPizza"></canvas>

                            <div class="pizza-center">
                                <h2>64%</h2>
                                <span>Total de Vendas</span>
                            </div>
                        </div>

                        <div class="pizza-legend">
                            <div class="legend-item">
                                <span class="dot blue"></span>
                                Bruto
                                <span class="value">64%</span>
                            </div>

                            <div class="legend-item">
                                <span class="dot red"></span>
                                Acabamento
                                <span class="value">25%</span>
                            </div>

                            <div class="legend-item">
                                <span class="dot green"></span>
                                Ferramentas
                                <span class="value">11%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart-card employee-card">
                    <div class="card-header">
                        <h3>Funcionarios Destaques</h3>
                    </div>

                    <div class="employees-container">

                        <div class="employee">
                            <img src="Imagem/vicente.jpg" alt="Funcionario">
                            <span>Vicente Souza</span>
                        </div>

                        <div class="employee">
                            <img src="Imagem/login-user.jpg" alt="Funcionario">
                            <span>Maria Souza</span>
                        </div>

                        <div class="employee">
                            <img src="Imagem/login-user.jpg" alt="Funcionario">
                            <span>Carlos Lima</span>
                        </div>

                        <div class="employee">
                            <img src="Imagem/login-user.jpg" alt="Funcionario">
                            <span>Ana Costa</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <footer>
        <p><i class="bi bi-c-circle"></i> ConstruTech - 2026</p>
    </footer>

    <script src="./JS/logoutModal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./JS/admin.js"></script>
</body>
</html>