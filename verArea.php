<?php
    include('ligacao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = filter_input(INPUT_POST, 'Primeiro_Nome');
        $idade = filter_input(INPUT_POST, 'idade');
        $gen = filter_input(INPUT_POST, 'genero');
        $num = filter_input(INPUT_POST, 'numero');
        $morada = filter_input(INPUT_POST, 'morada');
        $diabetes = filter_input(INPUT_POST, 'diabetes');
        $colesterol = filter_input(INPUT_POST, 'colesterol');
        $ncidadao = filter_input(INPUT_POST, 'n_cidadao');
    }

    if (empty($nome) || empty($idade) || empty($gen) || empty($num)|| empty($morada)|| empty($diabetes)|| empty($colesterol)) {
        header('Location: minha_area.php?erro=preenchimento');
    } else {
    
        if ($gen=='m') {
            $gen='masculino';
        }
        else {
            $gen='feminino';
        }
        $consulta = "INSERT INTO `utentes` (`Nome`, `Idade`, `NoCidadao`, `Número`, `Morada`, `Genero`, `Diabetes`, `Colesterol`) ";
        $consulta .= "VALUES ('$nome', '$idade', '$ncidadao', '$num', '$morada', '$gen', '$diabetes', '$colesterol');";
        $resultado = $ligacao->query($consulta);
        
        header('Location: minha_area.php?info=sucesso');
    }



?>