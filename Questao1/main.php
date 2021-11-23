<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $botao = $_POST['calcular'];

    $media = ($nota1 + $nota2)/2;

    if(isset($_POST['calcular'])){
        echo "O aluno ficou com $media de media";
    }
?>