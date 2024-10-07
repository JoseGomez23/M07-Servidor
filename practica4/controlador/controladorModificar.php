<?php 
//JOSE GOMEZ
require "../conexio.php";

//Funcio que controla l'execucio de la funcio modificar
function modificarArticle(){
    
    global $conex;

    $titolarticle = $_POST["titolmodificar"];
    $titolnou = $_POST["titolmodificat"];
    $cos = $_POST["cosmodificar"];

    $titolnou = trim($titolnou);

    if(empty($titolnou)){
        echo "El titol a modificar no pot ser buit";
    } else {

    
    require_once "../model/modelModificar.php";

    try {
        verificarModificar($titolarticle,$cos,$titolnou); //Crida de la funcio
    

} catch (PDOException $e) {

    echo "Error al modificar les dades: " . $e->getMessage();

}
    }
}
?>