<?php

include_once "../model/modelRegistre.php";

function comprovacions(){

    $nomusuari = $_POST["nomusuari"];
    $psswd1 = $_POST["pswd1"];
    $psswd2 = $_POST["pswd2"];
    $correu = $_POST["email"];

    verificarUsuari($correu, $psswd1, $psswd2, $nomusuari);

}

?>