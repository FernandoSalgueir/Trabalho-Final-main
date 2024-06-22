<?php
include('ligacao.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Life Health - Resgistro</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <?php include_once("menu.php") ?>

    <section id="registro">
        <div class="registro">
            <h2>Registo</h2>
            <form method="POST" action="verRegistro.php" >
                <p>
                <label for="Primeiro_Nome">Primeiro Nome:</label><br>
                <input type="text" id="Primeiro_Nome" name="Primeiro_Nome" required>
                </p>
                <p>
                <label for="Ultimo_Nome">Ultimo Nome:</label><br>
                <input type="text" id="Ultimo_Nome" name="Ultimo_Nome" required>
                </p>
                <p>
                <label for="username">Nº de cidadão:</label><br>
                <input type="text" id="username" name="username" required>
                </p>
                <p>
                <label for="password">Senha:</label><br>
                <input type="password" id="password" name="password" required>
                </p>
                <input type="submit" value="Registar">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?>

</body>
</html>