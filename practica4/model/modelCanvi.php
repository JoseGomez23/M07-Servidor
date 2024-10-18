<?php



function verificarCanvi($psswd,$psswdnova,$psswdnovaconf){

    global $conex;
    
    try{

        $correu = $_SESSION['correu'];
        var_dump($correu);
        //Consulta per buscar l'usuari amb el nom que hem introduit
        $sql = "SELECT * FROM usuaris WHERE correu =:correu";
        $stmt = $conex->prepare($sql);
        $stmt->execute([":correu"=>$correu]);

        $boolean = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($boolean != null){
            
            comprovarPswdActual($correu, $psswd,$psswdnova,$psswdnovaconf);
        } else {
            echo "ERROR!, l'usuari no existeix";
        }
    } catch(PDOException $e){
        echo "Error al conectar-se a la BD". $e->getMessage();
    }

}

function comprovarPswdActual($correu,$psswd,$psswdnova,$psswdnovaconf){

    global $conex;

    $sql = "SELECT contrasenya FROM usuaris WHERE correu =:correu";
    
    $stmt = $conex->prepare($sql);
    $stmt->execute([":correu"=>$correu]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $regexp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/";

    if(preg_match($psswdnova,$regexp)){

        if($result && password_verify($psswd,$result['contrasenya'])){

            if($psswdnova == $psswdnovaconf){

                $psswdnova = password_hash($psswdnova, PASSWORD_BCRYPT);

                $sql = "UPDATE usuaris SET contrasenya = :contrasenya WHERE correu = :correu";
                $stmt = $conex->prepare($sql);
                $stmt->execute([":contrasenya"=>$psswdnova,":correu"=>$correu]);

                echo "Contrasenya actualitzada!";

            } else {
                echo "Les contrasenyes no coincideixen";
            }

        } else {

            echo "Contrasenya actual incorrecte";
        }
    } else {
        echo "Contrasenya nova amb poca consistencia";
    }
}

function canviarPswd(){

}

?>