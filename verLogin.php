<?php

include('ligacao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = filter_input(INPUT_POST, 'username');
    $pass = filter_input(INPUT_POST, 'password');
}

if (empty($login) || empty($pass)) {
    header('Location: login.php?erro-preenchimento');
} else {
    // Encriptação da palavra-passe com método sha1()
    $pass = md5($pass);
    $consulta = "SELECT NoCidadao, Primeiro_Nome FROM signup ";
    $consulta .= "WHERE NoCidadao like '$login' AND Password='$pass'";
    try {
        $resultado = $ligacao->query($consulta);
        if ($resultado->num_rows > 0) {
            $util = $resultado->fetch_assoc();
            $_SESSION['Cod'] = $login;
            $_SESSION['Util'] = $util['Primeiro_Nome'];
            header('Location: minha_area.php?log=sucesso');
        } else {
            header('Location: login.php?log=erro');
        }
    } catch (Exception $e) {
        echo 'Falha na consulta: ' . $ligacao->error;
    }
}




?>