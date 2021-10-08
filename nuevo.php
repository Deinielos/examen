<?php
        include "Clases/Coche.php";
        include "datos.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Concesionario Piramide</h1>
    <a href="index.php">Coches</a>
    <a href="nuevo.php">Nuevo</a>
    <form action="index.php" method="GET"> 
        <p>Matricula:</p>
        <input type="text" name="matricula">
        <p>Marca:</p>
        <input type="text" name="marca">
        <p>Modelo:</p>
        <input type="text" name="modelo">
        <p>Km:</p>
        <input type="text" name="km">
        <br>
        <br>
        <input type="submit" value="Añadir">
    </form>
</body>
</html>