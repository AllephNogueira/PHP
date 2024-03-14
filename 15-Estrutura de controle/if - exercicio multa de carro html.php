<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificação de multa</title>
</head>
<body>

    <h1>Notificação de multas.</h1>

    <?php

    // Crie um variavel que recebe a velocidade de um carro


    // Depois criar um if que verifica a velocidade

    // Velocidade menor que 40 == velocidade correta

    // Velocidade igual a 40 == atenção

    // Maior que 40 o motorista foi multado + valor da multa.




    $radar1 = 40;
    $motorista = 40;


    $msgBaixa = "Voce passou na velocidade $motorista e o nosso radar é de $radar1 <br>";


    $msgAtencao = "Voce passou na velocidade $motorista e o nosso radar é de $radar1 <br> Atenção, voce pode ser multado.";


    $msgMulta ="Voce passou na velocidade $motorista e o nosso radar é de $radar1 <br> Atenção, voce esta multado.";


    echo "Atenção, voce esta chegando em uma area com radar de $radar1 km/h<br>";
    echo "====================================<br>"; 

    if ($motorista < $radar1){ // Se a velocidade for menor que 40.

        echo $msgBaixa;

    } else if ($motorista <= $radar1){ // Se a velocidade for ate 40

        echo $msgAtencao;

    } else { // Se a velocidade for maior que 40

        echo $msgMulta;

    }
    ?>
    
</body>
</html>