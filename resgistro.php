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

    <section id="resgistro">
        <div class="registro">
            <h2>Registro</h2>
            <form method="POST" action="verRegistro.php" >
                <label for="Primeiro_Nome">Primeiro Nome:</label>
                <input type="text" id="Primeiro_Nome" name="Primeiro_Nome" required>
                <br>
                <label for="Ultimo_Nome">Ultimo Nome:</label>
                <input type="text" id="Ultimo_Nome" name="Ultimo_Nome" required>
                <br>
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="registro">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?>

</body>
</html>