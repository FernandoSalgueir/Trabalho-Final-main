<?php
include('ligacao.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Life Health - Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <?php include_once("menu.php") ?>

    <section id="area">
        <div class="area">
            <h2>Minha Área</h2>
            <form method="POST" action="verLogin.php" >
            <label for="Primeiro_Nome">Nome Completo:</label>
                <input type="text" id="Primeiro_Nome" name="Primeiro_Nome" required>
                <br>
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" required>
                <br>
                <label for="genero">Género:</label>
                <input type="text" id="genero" name="genero" required>
                <br>
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <input type="submit" value="Area">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?>

</body>
</html>
