<?php
    $Nombre = $_POST["Nombre"];
    $Asignatura = $_POST["Asignatura"];
    $Nota1 = $_POST["Nota1"];
    $Nota2 = $_POST["Nota2"];
    $Nota3 = $_POST["Nota3"];

    $SUMA = $Nota1 + $Nota2 + $Nota3;
    $PROMEDIO = $SUMA / 3;

    echo "el promedio del estudiante es ".$PROMEDIO; 
?>