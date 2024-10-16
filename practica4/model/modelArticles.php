<?php
//Jose Gomez

require_once "../conexio.php";  // Asegúrate de usar require_once para evitar múltiples inclusiones

function verificarArticles(){

    global $conex;

    try {
        
    $sqlCount = "SELECT COUNT(*) as total FROM articles";
        $stmtCount = $conex->prepare($sqlCount);
        $stmtCount->execute();
        $resultat = $stmtCount->fetch(PDO::FETCH_ASSOC);
        $totalArticles = $resultat['total'];

        if($totalArticles == 0){
            header("Location: ../index.php");
        }


    } catch (Exception $e) {
        echo "Error al llegir la base de dades";
    }
    
}

function mostrarArticlesModel($pagina = 1, $limitArticles){
    global $conex;
    try {
        
        if($limitArticles != ""){
            

            // offset = a partir de quin article s'ha de mostrar
            $offset = ($pagina - 1) * $limitArticles; //Exemple: (1-1) * 2 = comença per l'article 0
            // Comptar articles 
            $sqlCount = "SELECT COUNT(*) as total FROM articles";
            $stmtCount = $conex->prepare($sqlCount);
            $stmtCount->execute();
            $resultat = $stmtCount->fetch(PDO::FETCH_ASSOC);
            $totalArticles = $resultat['total'];

            // Calcular pagines a mostrar
            if($limitArticles != 0 ){
                $totalPagines = ceil($totalArticles / $limitArticles); //ceil() arrodoneix cap a dalt

                // Consulta que mostra els articles, limit es la quantitat mostrada i offset a partir de quin article s'ha de mostrar
                $sql = "SELECT * FROM articles LIMIT :limit OFFSET :offset";
                $stmt = $conex->prepare($sql);
                $stmt->bindParam(':limit', $limitArticles, PDO::PARAM_INT);
                $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                $stmt->execute();
                $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
                mostrarArticleDef($article,$totalPagines,$limitArticles);
            } else {
                echo "Introdueix un nombre valid";
            
            }
        } else {
            echo "Has d'introduir un numero";
        }

    
    } catch (PDOException $e) {
    
        echo "Error al obtenir els articles: ";
    } catch (Exception $e) {
        
        echo $e->getMessage();
    }
}

function mostrarArticleDef($article, $totalPagines,$limitArticles) {

    // Mostrar articles paginats
    foreach ($article as $article) {
        echo "<div>";
        echo "Títol: " . htmlspecialchars($article['titol']) . "<br>";
        echo "Cos: " . htmlspecialchars($article['cos']) . "<br>";
        echo "</div>";
        echo "-------------------------------------------------------------<br>";
    }

    // Mostrar paginacio
    echo "<div class='paginacio'>";
    for ($i = 1; $i <= $totalPagines; $i++) {
        // Generar enllaç per moure's de pagina(los numeritos pequeños con los que te mueves entre paginas)
        echo "<a href='?pagina=$i&articlesperpag=$limitArticles'>$i</a> ";
    }
    echo "</div>";

    $paginaActual = isset($_GET["pagina"]) ? (int)$_GET["pagina"] : 1; //Agafar constantment el valor 

    //Boto per anar de - a +
    if ($paginaActual > 1) {
        echo '<a href="?pagina=' . ($paginaActual - 1) . '&articlesperpag=' . $limitArticles . '">ENRERE </a>';
    } else {
        echo '<button disabled> ENRERE</button>';
    }

    //Boto per anar de - a +
    if ($paginaActual < $totalPagines) {
        echo '<a href="?pagina=' . ($paginaActual + 1) . '&articlesperpag=' . $limitArticles . '">ENDAVANT </a>';
    } else {
        echo '<button disabled> ENDAVANT</button>';
    }
    
    
}


function mostrarArticlesModelUsuari($pagina,$limitArticles){

    global $conex;
    try {
        
        if($limitArticles != ""){
            

            // offset = a partir de quin article s'ha de mostrar
            $offset = ($pagina - 1) * $limitArticles; //Exemple: (1-1) * 2 = comença per l'article 0
            // Comptar articles 
            $sqlCount = "SELECT COUNT(*) as total FROM articles";
            $stmtCount = $conex->prepare($sqlCount);
            $stmtCount->execute();
            $resultat = $stmtCount->fetch(PDO::FETCH_ASSOC);
            $totalArticles = $resultat['total'];

            // Calcular pagines a mostrar
            if($limitArticles != 0 ){
                $totalPagines = ceil($totalArticles / $limitArticles); //ceil() arrodoneix cap a dalt

                // Consulta que mostra els articles, limit es la quantitat mostrada i offset a partir de quin article s'ha de mostrar
                $sql = "SELECT * FROM articles LIMIT :limit OFFSET :offset";
                $stmt = $conex->prepare($sql);
                $stmt->bindParam(':limit', $limitArticles, PDO::PARAM_INT);
                $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                $stmt->execute();
                $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
                mostrarArticleDef($article,$totalPagines,$limitArticles);
            } else {
                echo "Introdueix un nombre valid";
            
            }
        } else {
            echo "Has d'introduir un numero";
        }

    
    } catch (PDOException $e) {
    
        echo "Error al obtenir els articles: ";
    } catch (Exception $e) {
        
        echo $e->getMessage();
    }
    
}


// Capturar el número de pàgina desde la URL, per defecte sera 1
$pagina = isset($_GET["pagina"]) ? (int)$_GET["pagina"] : 1;





?>