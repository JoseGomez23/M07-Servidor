<!DOCTYPE html>
<!--Jose Gomez-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estils/estilsArticles.css">
</head>
<body>
    <h1>TOTS ELS ARTICLES</h1>
    <form method="get">
    <p>Articles per pagina<p>
    <input type="number" name="articlesperpag" value="<?php echo $_POST["articlesperpag"] ?? $_GET["articlesperpag"] ?? '2'; ?>">
    <input type="submit" value="Executar">
    </form>
    <?php
    
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            
            require_once "../controlador/controladorArticles.php";
            require_once "../conexio.php";
            mostrarElsArticles();//Crida de la funcio
    
        }
    ?>
    <form method="post" action="../index.php">
        <input type="submit" value="Tornar">
    </form>
    
</body>
</html>