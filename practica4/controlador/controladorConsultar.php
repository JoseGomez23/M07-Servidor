<?php 
//JOSE GOMEZ
require "../conexio.php";

//Funcio que controla l'execucio de la funcio consultar
function consultarArticle(){
    global $conex;

    
    $titolarticle = $_POST["titol"];

    
    require_once "../model/modelConsultar.php";

    try {
        verificarConsultar($titolarticle); //Crida de la funcio
    

} catch (PDOException $e) {

    echo "Error al consultar les dades: " . $e->getMessage();

}
}
?>