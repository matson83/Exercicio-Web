<?php
    $ano = $_POST['ano'];
    $anoAtual = 2021;
    $idade = $anoAtual-($_REQUEST['ano']);
    $diasVividos = 365 * $idade;
    $anos2022 = $idade + 1;

echo nl2br ("Você nasceu em $ano. \n Você já viveu $diasVividos dias. \n Você tem $idade anos de idade. \n Você terá $anos2022 anos em 2022.");



?>