<?php

require_once "../conexio.php";

function verificarUsuari5($correu, $psswd){

    global $conex;

    var_dump($conex);
    try{

        //Consulta per buscar l'usuari amb el nom que hem introduit
        $sql = "SELECT * FROM usuaris WHERE correu =:correu";
        $stmt = $conex->prepare($sql);
        $stmt->execute([":correu"=>$correu]);

        $boolean = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($boolean != null){
            
            decriptarPsswd($correu, $psswd);
        } else {
            echo "ERROR!, no hi ha cap usuari amb aquest correu, vols <a href=\"../vista/vistaRegistre.php\">Registrar-te?</a>. ";
        }
    } catch(PDOException $e){
        echo "Error al conectar-se a la BD". $e->getMessage();
    }

}

function decriptarPsswd($correu, $psswd) {

    global $conex;
    

    try{
    
    $sql = "SELECT contrasenya FROM usuaris WHERE correu =:correu";
    $stmt = $conex->prepare($sql);

    $stmt->execute([":correu"=>$correu]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    

    if($result &&  password_verify($psswd,$result['contrasenya'])){
        echo "Logat";
    }

    } catch (Exception $e){

    }


}
?>