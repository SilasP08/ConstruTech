<div class="menu-vertical-container">
    <div class="img-user">
        <img src="Imagem/login-user.jpg" alt="">
        <div class="name-user">Bem Vindo de volta <?php echo $nome_admin ?>!</div>
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