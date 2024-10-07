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
        <div>
            <input type="email" placeholder="EMAIL" name="email" value="<?php echo $_POST["email"] ?? '' ?>">
            <br>
            
            <input type="password" placeholder="Contrasenya">
            <br>
            <input type="submit" value="Iniciar sessió">
        </div>

        <p></p>

        <form action="../index.php" method="get">
        <input type="submit" value="Tornar">

        <p>Reestableix la teva contrasenya<a href="../vista/vistaRegistre.php"> aqui</a>
        <p>No tens cap compte?: <a href="../vista/vistaRegistre.php">Registra't</a></p>

        
    </form>
    </form>
</body>
</html>