<?php
//JOSE GOMEZ

    function mostrarElsArticles(){


        session_start();
        if (isset($_SESSION['usuari'])) {

            // Assignacio de variables intval transforma el string a integer, per defecte sera 1
        $pagina = isset($_GET["pagina"]) ? intval($_GET["pagina"]) : 1; //Set de la pagina, si no troba cap amb el metode get posara per defecte la pagina 1
        $limitArticles = isset($_GET["articlesperpag"]) ? intval($_GET["articlesperpag"]) : 2; //Set del numero de articles, si no troba cap pel get assignara un 2 automaticament
        if($limitArticles < 0){
            $limitArticles === 1;

            require_once "../model/modelArticles.php";
            verificarArticles();
            mostrarArticlesModelUsuari($pagina,$limitArticles); //Crida de la funcio

        } else {
            
            require_once "../model/modelArticles.php";
            verificarArticles();
            mostrarArticlesModel($pagina,$limitArticles); //Crida de la funcio

        }
        } else {

        // Assignacio de variables intval transforma el string a integer, per defecte sera 1
        $pagina = isset($_GET["pagina"]) ? intval($_GET["pagina"]) : 1; //Set de la pagina, si no troba cap amb el metode get posara per defecte la pagina 1
        $limitArticles = isset($_GET["articlesperpag"]) ? intval($_GET["articlesperpag"]) : 2; //Set del numero de articles, si no troba cap pel get assignara un 2 automaticament
        if($limitArticles < 0){
            $limitArticles === 1;

            require_once "../model/modelArticles.php";
            verificarArticles();
            mostrarArticlesModel($pagina,$limitArticles); //Crida de la funcio

        } else {
            
            require_once "../model/modelArticles.php";
            verificarArticles();
            mostrarArticlesModel($pagina,$limitArticles); //Crida de la funcio

        }
    }
    }

?>