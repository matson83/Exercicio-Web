<?php
    $baseMenor = $_REQUEST['baseMenor'];
    $baseMaior = $_REQUEST['baseMaior'];
    $altura = $_REQUEST['altura'];

    $calculo = (($baseMaior + $baseMenor) * 2 )/ 2;

    echo "O resultado do trapézio é:" .$calculo;
?>