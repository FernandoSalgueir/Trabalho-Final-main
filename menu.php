<header>
    <a href="index.php"><img id="logo" src="Imagens/imagem.png" alt="Site's logo"></a>
    <ul id="menu">
       
        <li><a href="sobre_nos.php#sobrenos">Sobre Nós</a></li>
        <?php if(!isset($_SESSION['Cod'])) { ?>
        <li><a href="login.php">Login</a>
        </li>
        <?php } else { ?>
        <li class="dropdown">
            <a href="logout.php"><?=  $_SESSION['Util']; ?></a>
            <div class="dropdown-menu">
                <a href="logout.php">Logout</a>
                <a href="minha_area.php">Minha Area</a>
            </div>
        </li>
        <?php }    
        ?>
        
    </ul>
</header>