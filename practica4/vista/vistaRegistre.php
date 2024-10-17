<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../estils/pruebas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>Formulari de registre</h1>
    <tr>Intodueix les dades
        <div>
            <p>Nom d'usuari</p>
            <input type="text" name="nomusuari">
            <br>
            <p>Contrasenya</p>
            <input type="password" name="pswd1">
            <br>
            <p>Verificar contrasenya</p>
            <input type="password" name="pswd2">
            <br>
            <p>Correu electronic</p>
            <input type="email" name="email">
            
        </div>

        <input type="submit" value="Registrar-se">

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST" && (!empty($_POST["nomusuari"]))) {
            
            require_once "../controlador/controladorRegistre.php";
            comprovacions(); // Crida de la funcio

        }

        ?>
        <input type="submit"  value="tornar">

        <p>Ja tens compte?:<a href="../vista/vistaLogin.php">Inicia sessió</a>


    </tr>

    </form>

    
</body>
</html>