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

    <section id="login">
        <div class="login">
            <h2>Login</h2>
            <form method="POST" action="verLogin.php" >
                <p>
                <label for="username">Utilizador:</label><br>
                <input type="text" id="username" name="username" placeholder="Nº de cidadão"required>
                </p>
                <p>
                <label for="password">Senha:</label><br>
                <input type="password" id="password" name="password" required>
                </p>
                <input type="submit" value="Login">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?>

</body>
</html>
