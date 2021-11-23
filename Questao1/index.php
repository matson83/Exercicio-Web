<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
<!--
        Nome: Matson Leite
        Equipe: Matson/Pedro/Farney/Matheus Finizola
        turma: CC P2
        código criado dia:22/11
        Questão:1
-->

    <fieldset>
    <form action="main.php" method="POST">
        <label for="">Digite o seu nome:</label>
        <input type="text" class="Info" name="nome" required><br><br>
        <label for="">Digite sua nota 1:</label>
        <input step="0.01" type="number" name="nota1" class="Info" required><br><br>
        <label for="">Digite sua nota 2:</label>
        <input step="0.01" type="number" name="nota2" class="Info" required><br><br><br>
        <input type="submit" name="calcular" class="botao" value="Calcular">
    </fieldset>
    </form>
</body>
</html>