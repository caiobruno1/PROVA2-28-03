<nav class="navbar" style="background-color: #e3f2fd;">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="consultar.php">Consultar</a>
        </li>
    </ul>

    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link">
                Seja bem vindo - <?= $_SESSION['usuario'] ?>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../php/logout.php">Sair</a>
        </li>
        
    </ul>

</nav>