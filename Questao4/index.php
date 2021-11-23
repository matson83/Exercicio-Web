<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>

<!--    Nome: Matson Leite
        Equipe: Matson/Farney/Pedro/Matheus Finizola
        turma: CC P2
        código criado dia:22/11
        Questão:4
-->

<form action="main.php" method="POST">
        Nome: <input type="text" name="nome" id="nome"/><br/>

        Idade: <input type="text" name="idade" id="idade"/><br/>

        Enviar: <input type="submit" value="enviar"/>

        <label for="sexo">Sexo.:</label>
        
        <input type="radio" name="sexo" value="Masculino " id="sexo"> Masculino

        <input type="radio" name="sexo" value="Feminino " id="sexo"> Feminino <br>

    </form>
</body>
</html>