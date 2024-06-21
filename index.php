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
    <img src="imagens/Health1.png">
    <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imagens/penso.png">
    <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imagens/medicanismo.png">
    <div class="text">Caption Two</div>
    </div>
    
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(0)"></span>
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    
    
    <section id="servlif">
    <h1>Serviços do Life Health</h1>
    <h3>O serviço da Life Health disponibiliza-lhe alguns serviços digitais.</h3>
    <h3>Queremos estar mais próximos de si e ajudá-los o máximo possivel.</h3>
    <br>
    <br>    
    <br>
    <br>
    <br>
    <br>
</section>




    <?php include_once("footer.php") ?>
    </body>
    <script src="slide.js" defer></script>
</html>