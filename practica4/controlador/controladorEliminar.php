<?php 
//JOSE GOMEZ
require "../conexio.php";

//Funcio que controla l'execucio de la funcio eliminar
function eliminarArticle(){
    global $conex;

    
    $titolarticle = $_POST["titoleliminar"];

    
    require_once "../model/modelEliminar.php";

    try {
        verificarEliminar($titolarticle); //Crida de la funcio
    

} catch (PDOException $e) {

    echo "Error al eliminar les dades: " . $e->getMessage();

}
}
?>