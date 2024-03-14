<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
    // Iniciando o include

    include "teste.php";

    ?>
</head>
<body>
    <h1>Bem vindo ao meu site</h1>
    <p>Esse site é um teste para testar o INCLUDE</p>

    <input type="Digite a quantidade que voce quer contar"><br><br>
    
    <?php
    
    // Pegando uma funçao que esta dentro do include.
    
    contagem(30); ?>

    <h1>Esse é o nome do usuario: <?php echo $nome ?></h1> 
    # Pegando uma variavel que esta dentro do include e colocando dentro do h1
    
</body>
</html>