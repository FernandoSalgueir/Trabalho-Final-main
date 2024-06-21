<?php 

include('ligacao.php');

if(isset($_SESSION['Cod'])) {
    unset($_SESSION['Cod']);
}
if(isset($_SESSION['Util'])) {
    unset($_SESSION['Util']);
}

header('Location: index.php?msg=logout');

?>