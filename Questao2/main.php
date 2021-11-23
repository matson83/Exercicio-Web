<?php

    $comissao = $_REQUEST['vendas']*0.04;
    $comissionado = $_REQUEST['salario']+$comissao;

    echo nl2br("Sua comissão é de $comissao. \n Seu salário será de $comissionado.")
    

?>