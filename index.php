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
    <form action="" method="GET">
        <input type="text" name="buscador"/>
        <input type="submit" value="Buscar">
            <ul>
            <?php
                $buscador=$_GET["buscador"];
                $cocheNuevo=new Coche($_GET["matricula"],$_GET["marca"],$_GET["modelo"],$_GET["km"]);
                if($cocheNuevo->getMarca("matricula")!==null){
                    array_push($coches,$cocheNuevo); 
                }
                foreach ($coches as $coche) {
                    if ($buscador=="") {
                        echo '<li> <p> Matricula: '.$coche->getMatricula() . '</p> <br> <p> Marca: ' . $coche->getMarca() . '</p> <br> <p> Modelo: ' . $coche->getModelo() . '</p> <br> <p> Km: ' . $coche->getKm() . '</p> <br> </li>';
                    }
                    if ($coche->getMatricula()==$buscador) {
                        echo '<li> <p> Matricula: '.$coche->getMatricula() . '</p> <br> <p> Marca: ' . $coche->getMarca() . '</p> <br> <p> Modelo: ' . $coche->getModelo() . '</p> <br> <p> Km: ' . $coche->getKm() . '</p> <br> </li>';
                    }
                };
            ?>
            </ul>
    </form>
</body>
</html>