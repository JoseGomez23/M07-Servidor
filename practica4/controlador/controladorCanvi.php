<?php

require_once "../conexio.php";
function canviContrasenya(){
    session_start();

    if(isset($_SESSION['usuari'])){

        $psswd = $_POST["contrasenya"];
        $psswdnova = $_POST['contrasenyanova'];
        $psswdnovaconf = $_POST['contrasenyanovaconf'];

        require_once "../model/modelCanvi.php";
        verificarCanvi($psswd,$psswdnova,$psswdnovaconf);

    }

}

?>