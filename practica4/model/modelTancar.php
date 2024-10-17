<?php

function tancarSessioUsuari(){

    session_destroy();
    header("Location: ../index.php");

}


?>
