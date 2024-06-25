<?php
include('ligacao.php');

$consulta = "SELECT * FROM Utentes Where NoCidadao=" . $_SESSION['Cod'] .";";
$resultado=$ligacao->query($consulta);
if($resultado->num_rows == 0) {
    header("Location: minha_area.php");
}
else{
    $utente = $resultado->fetch_assoc();

    $consulta ="SELECT * FROM sugestoes WHERE coles_min < " . $utente['Colesterol'] . " AND coles_max > " . $utente['Colesterol']; 
    $consulta .= " AND idade_min < " . $utente['Idade'] . " AND idade_max > " . $utente['Idade'];
    $consulta .=" AND genero ='" .$utente['Genero'] . "';";
    $ressugestao=$ligacao->query($consulta);
    $sugestao=$ressugestao->fetch_assoc();
    
    $consulta = "UPDATE Utentes SET Cod_sugestoes=" . $sugestao['Cod_sugestoes'] . " WHERE NoCidadao=" . $_SESSION['Cod'] .";";
    $resultado=$ligacao->query($consulta);

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
            <h2>Sugestões</h2>
           <p><?= $sugestao['sugestao']; ?>
        </div>
    </section>
    <?php include_once("footer.php") ?> 

</body>
</html>

<?php } ?>
