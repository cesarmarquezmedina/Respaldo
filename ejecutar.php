<?php
$salida= array(); //recogerá los datos que nos muestre el script de Python
 
    $texto="Hola Mundo prueba";
    exec("python contar.py '".$texto."'",$salida);
    echo $salida[0];
    echo "\n";
?>