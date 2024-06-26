<?php
include('ligacao.php');

$consulta = "SELECT * FROM Utentes Where NoCidadao=" . $_SESSION['Cod'] .";";
$resultado=$ligacao->query($consulta);
if($resultado->num_rows == 0) {
    header("Location: minha_area.php");
}
else{
    $utente = $resultado->fetch_assoc();

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
            <form method="POST" action="atualiza_area.php" >
                <p>
                <label for="Primeiro_Nome">Nome Completo:</label><br>
                <input type="text" id="Primeiro_Nome" name="Primeiro_Nome" required value="<?= $utente['Nome']?>">
                </p>
                <p>
                <label for="idade">Idade:</label><br>
                <input type="number" id="idade" name="idade" required value="<?= $utente['Idade']?>">
                </p>
                <p>
                <label for="genero"><p>Género:</p><br>
                <label class="radio_gen">
                <input type="radio" id="genero" name="genero" value="m" required <?php if($utente['Genero']=="masculino") echo 'checked';  ?>>Masculino
                </label>
                <label class="radio_gen">
                <input type="radio" id="genero" name="genero" value="f" required <?php if($utente['Genero']=="feminino") echo 'checked';  ?>>Feminino
                </label>    
                </p>
                <p>
                <label for="numero">Número de telemóvel:</label><br>
                <input type="text" id="numero" name="numero" required value="<?= $utente['Número']?>">
                </p>
                <p>
                <label for="morada">Morada:</label><br>
                <input type="text" id="morada" name="morada" required value="<?= $utente['Morada']?>">
                </p>
                <p>
                <label for="diabetes">Valor da Glicemia:</label><br>
                <input type="text" id="diabetes" name="diabetes" required value="<?= $utente['Diabetes']?>">
                </p>
                <p>
                <label for="colesterol">Valor do colesterol:</label><br>
                <input type="text" id="colesterol" name="colesterol" required value="<?= $utente['Colesterol']?>">
                </p>
                <input type="hidden" name="n_cidadao" value="<?= $_SESSION['Cod'] ?>">
                <input type="submit" value="Alterar" />
                <button onclick="event.preventDefault(); window.location='sugestao.php'">Sugestões</button>
            </form>
        </div>
    </section>
    <?php include_once("footer.php") ?> 

</body>
</html>

<?php } ?>
