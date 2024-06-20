<?php
include('ligacao.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Life Health</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <?php include_once("menu.php") ?>

    
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <h1>Bem-Vindos ao Life Health</h1>

    <!-- Slideshow container -->
    <div class="slideshow-container">
    
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imagens/cakee.png" style="width:100%">
    <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imagens/burger.png" style="width:100%">
    <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imagens/Hstyle3.jpg" style="width:100%">
    <div class="text">Caption Two</div>
    </div>
    
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    
    </div>
    
    
    <section id="servlif">
    <h1>Serviços do Life Health</h1>
    <p>O serviço da Life Health disponibiliza-lhe alguns serviços digitais.</p>
    <p>Queremos estar mais próximos de si e ajuda-los o maximo possivel.</p>
    </section>




    <?php include_once("footer.php") ?>
    </body>

</html>