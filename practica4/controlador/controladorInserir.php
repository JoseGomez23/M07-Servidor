<?php 

//JOSE GOMEZ
require "../conexio.php";

//Funcio que controla l'execucio de la funcio inserir
function inserirArrticle(){

    global $conex;

    $titol = $_POST["titolinserir"];
    $cos = $_POST["cosinserir"];
    $titol = trim($titol);

    if(empty($titol)){
        echo "Titol no pot ser buit";
    } else {

        require_once "../model/modelInserir.php";
        
        try{
        verificarInserir($titol,$cos); //Crida de la funcio

        } catch (PDOException $e) {
            echo "Error al inserir les dades: " . $e->getMessage();
        }
    }
}

?>