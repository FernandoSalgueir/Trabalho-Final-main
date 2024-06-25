<?php
include('ligacao.php');

$consulta = "SELECT NoCidadao FROM Utentes Where NoCidadao=" . $_SESSION['Cod'] .";";
$resultado=$ligacao->query($consulta);
if($resultado->num_rows > 0) {
    header("Location: edita_area.php");
}
else{
    
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
            <form method="POST" action="verArea.php" >
                <p>
                <label for="Primeiro_Nome">Nome Completo:</label><br>
                <input type="text" id="Primeiro_Nome" name="Primeiro_Nome" required>
                </p>
                <p>
                <label for="idade">Idade:</label><br>
                <input type="number" id="idade" name="idade" required>
                </p>
                <p>
                <label for="genero">Género:</label><br>
                <input type="radio" id="genero" name="genero" required>
                </p>
                <p>
                <label for="numero">Número de telemóvel:</label><br>
                <input type="text" id="numero" name="numero" required>
                </p>
                <p>
                <label for="morada">Morada:</label><br>
                <input type="text" id="morada" name="morada" required>
                </p>
                <p>
                <label for="diabetes">Valor da Glicemia:</label><br>
                <input type="text" id="diabetes" name="diabetes" required>
                </p>
                <p>
                <label for="colesterol">Valor do colesterol:</label><br>
                <input type="text" id="colesterol" name="colesterol" required>
                </p>
                <input type="hidden" name="n_cidadao" value="<?= $_SESSION['Cod'] ?>">
                <input type="submit" value="Guardar">
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?> 

</body>
</html>

<?php } ?>
