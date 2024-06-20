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
                <input type="number" id="idade" name="idade" required>
                <br>
                <label for="genero">Género:</label>
                <input type="text" id="genero" name="genero" required>
                <br>
                <label for="NoCidadao">Nº Cidadão:</label>
                <input type="text" id="NoCidadao" name="NoCidadao" required>
                <br>
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" required>
                <br>
                <label for="morada">Morada:</label>
                <input type="text" id="morada" name="morada" required>
                <br>
                <label for="numero">Valor da Glicemia:</label>
                <input type="text" id="numero" name="numero" required>
                <br>
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" required>
                <br>
                <input type="submit" value="Area">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?> 

</body>
</html>
