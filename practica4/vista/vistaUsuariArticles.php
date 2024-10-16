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
<header>
<nav class="navbar">
    <div class="navbar-logo">
        <a href="#">MiLogo</a>
    </div>
    <ul class="navbar-links">
        <li><a href="../vista/vistaInserir.php">Inserir</a></li>
        <li><a href="../vista/vistaModificar.php">Modificar</a></li>
        <li><a href="../vista/vistaConsultar.php">Consultar</a></li>
        <li><a href="../vista/vistaEliminar.php">Eliminar</a></li>
    </ul>
    <div class="navbar-buttons">
        <a href="../vista/vistaLogin.php" class="btn login-btn">Log In</a>
        <a href="../vista/vistaRegistre.php" class="btn register-btn">Registrarse</a>
    </div>
</nav>
</header>
<main>
</main>
 

<br>
<br>
<br>
<br>
<br>

    <h1>TOTS ELS ARTICLES</h1>
    <?php

        session_start();
        if (isset($_SESSION['usuari'])) {
            echo "Usuari: " . htmlspecialchars($_SESSION['usuari']);
        } else {
            echo "No has iniciado sesión.";
        }

    ?>
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