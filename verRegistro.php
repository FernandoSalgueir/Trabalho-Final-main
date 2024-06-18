<?php
    include('ligacao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $P_Nome = filter_input(INPUT_POST, 'Primeiro_Nome');
        $U_Nome = filter_input(INPUT_POST, 'Ultimo_Nome');
        $login = filter_input(INPUT_POST, 'username');
        $pass = filter_input(INPUT_POST, 'password');
    }

    if (empty($login) || empty($pass) || empty($P_Nome) || empty($U_Nome)) {
        header('Location: registro.php?erro=preenchimento');
    } else {
        // Encriptação da palavra-passe com método sha1()
        $pass = md5($pass);
        $consulta = "SELECT NoCidadao FROM signup ";
        $consulta .= "WHERE NoCidadao like '$login'";

        try {
            $resultado = $ligacao->query($consulta);
            if ($resultado->num_rows > 0) {
                header('Location: registro.php?log=jaexiste');
            } else {
                $consulta = "INSERT INTO `signup` (`Primeiro_Nome`, `Ultimo_Nome`, `NoCidadao`, `Password`) VALUES ('$P_Nome', '$U_Nome', '$login', '$pass');"
                $resultado = $ligacao->query($consulta);
                $_SESSION['Cod'] = $login;
                $_SESSION['Util'] = $P_Nome;
                header('Location: minha_area.php?log=sucesso');
            }
        } catch (Exception $e) {
            echo 'Falha na consulta: ' . $ligacao->error;
        }
    }


?>