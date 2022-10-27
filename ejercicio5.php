<?php
    $hermano1 = 22;
    $hermano2 = 16;
    $dif = $hermano1 - $hermano2;

    if ($hermano1==$hermano2){
        echo "las edades de los hermanos son iguales";
    }elseif($hermano1>$hermano2){
        echo "La edad del hermano1 ".$hermano1." es menor que el" .$hermano2;
    }else{
        echo "la edad del hermano2 ".$hermano1. " es mayor que el ".$hermano2;
    }
        echo" => La diferencia de edad es de " .$dif;
?>