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
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?>

</body>
</html>
