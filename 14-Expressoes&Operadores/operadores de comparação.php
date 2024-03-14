<?php

    // Operadores de comparação ==

    $numero1 = 1;
    $numero2 = 2;

    echo $numero1. $numero2. " Vamos testar sempre com esses valores<br><br>";

    // Igualdade

    if ($numero1 == $numero2){

        echo "Resposta correta<br>";

    }
    else{
        echo "Resposta invalida o $numero1 não é igual ao $numero2<br><br>";

    }


     // Operador de identico 

        // Nesse caso aqui os 2 teria que ser um inteiro
        // Aqui é um inteiro e uma string

    $numero1 = 0;
    $numero2 = 0;

    if ($numero1 === $numero2){

        echo "Resposta correta<br><br>";

    }
    else{
        echo "Resposta invalida o $numero1 não é igual ao $numero2<br><br>";

    }


    // Operador de diferença
    // Aqui ele testa se 0 é diferente de 4 se for ele entra no IF se nao no ELSE

    $numero1 = 0;
    $numero2 = 2;

    if ($numero1 != $numero2){

        echo "Resposta correta<br><br>";

    }
    else{
        echo "Resposta invalida o $numero1 não é diferente do $numero2<br><br>";

    }


    // Diferente nao identico
    // Se o numero for 4 inteiro e 4 string ele entra, é diferente porque sao 2 dados diferentes.

    $numero1 = 4;
    $numero2 = "4";

    // Nesse caso aqui ele vai aceitar, porque são dados diferentes.
    // numero1 = inteiro       numero2 = string

    if ($numero1 !== $numero2){

        echo "Resposta correta<br>";

    }
    else{
        echo "Resposta invalida o $numero1 não é diferente do $numero2<br><br>";

    }


    // Lembrar do maior ou igual ou menor ou igual
    //  5 > 5 = não
    // 5 >= 5 = verdadeiro 
    // 5 < 5 = falso
    // 5 <= 5 = Verdadeiro      = é verdadeiro porque ele é igual a cinco



?>
