<?php

    // Operador and &&
    // Lembrar que para entrar no && precisamos de 2 resultados verdadeiros.

    if( 5 < 2 && 10 > 100) {

        // 5 é menor que 2 : falso
        // 10 é maior que 100? : falso
        echo "Resultado correto 1<br>";
        
    }


    if (5 == 5 && 10 < 100){
        // 5 igual a 5 : verdadeiro
        // 10 é menor que 100: verdadeiro
        echo "Resultado verdadeiro 2";
    }



    
    if (5 == 5 && 10 > 100){
        // 5 igual a 5 : verdadeiro
        // 10 é maior que 100: falso
        echo "Resultado verdadeiro 3";
    }



    if (5 == 5 && 10 > 5 && 30 < 100 && 15 == 15){
        // Aqui fizemos com 4 testes verdadeiros
        echo "<br>Resultado verdadeiro 4";
        echo "<br> Aqui fizemos com 4 testes";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // Exercicios do operador AND

    // 15 > 5 && "Joao" == "Joao"

        if ( 15 > 5 && "Joao" == "Joao"){
            echo "<br>";
            echo "<br> Primeiro teste aprovado";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";


    // "Teste" > 5 && 1


        if ("Teste" > 5 && 1){
            echo "<br>";
            echo "<br> Teste aprovado 2 pqpqpqpqpqp???????";
        }
        // Converter "Teste" para inteiro

        $conversao = intval("Teste");
        echo "<br>".$conversao;



    // 2 == 3 && 5 >=3

    if (2 == 3 && 5 >= 3)    {
        // falso - verdade = falso
        echo "<br>";
        echo "<br> Teste aprovado 3";
    }

