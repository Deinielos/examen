<?php
    include "Clases/Coche.php";
    include "datos.php";
    
    $arrayCoches = array();

    foreach($coches as $coche){
        $arrayCoche= array (
            'matricula'=>$coche->getMatricula(),
            'marca'=>$coche->getMarca(),
            'modelo'=>$coche->getModelo(),
            'km'=>$coche->getKm()
        );
        array_push($arrayCoches,$arrayCoche);
    }
    echo json_encode($arrayCoches) ;
?>
