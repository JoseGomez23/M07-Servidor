<?php
//JOSE GOMEZ

    function mostrarElsArticles(){

         // Assignacio de variables intval transforma el string a integer, per defecte sera 1
        $pagina = isset($_GET["pagina"]) ? intval($_GET["pagina"]) : 1; //Set de la pagina, si no troba cap amb el metode get posara per defecte la pagina 1
        $limitArticles = isset($_GET["articlesperpag"]) ? intval($_GET["articlesperpag"]) : $_COOKIE['articlespag'] ?? $_COOKIE['articlespag'] ?? '2'; //Set del numero de articles, si no troba cap pel get assignara un 2 automaticament


        if (isset($_SESSION['usuari'])) {
            
            require_once "../model/modelArticles.php";

            if($limitArticles < 0){

                echo "Introdueix un numero mes gran de 0";
            } else {
            verificarArticles();
            mostrarArticlesModelUsuari($pagina,$limitArticles); //Crida de la funcio
            setcookie('articlespag', $limitArticles, time() + 86400 * 30, '/');
            }

        } else {

            if($limitArticles < 0){

                echo "Introdueix un numero mes gran de 0";
            } else {
            require_once "../model/modelArticles.php";
            verificarArticles();
            mostrarArticlesModel($pagina,$limitArticles); //Crida de la funcio
            }

        
        }

        
    }
    
?>