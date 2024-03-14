<?php

    // Converter os dados para inteiro com o operador cast

    // dados => "testando" 12.9 true [1,2,3] e imprimir os resultados


    $opcao1 = (int) "testando";
    $opcao2 = (int) 12.9;
    $opcao3 = (int) true;
    $opcao4 = (int) [1,2,3]; // Quando convertemos o Array para inteiro ele retorna 1

    echo $opcao1."<br>";

    echo $opcao2."<br>";

    echo $opcao3." = Array <br>"; 

    echo $opcao4."<br>";


    // Agora convertendo direto na imprenssao


    echo "=======================================<br><br>";

    echo intval($opcao1)."<br>";
    echo intval($opcao2)."<br>";
    echo intval($opcao3)."<br>";
    echo intval($opcao4)."<br>";


    echo "=======================================<br><br>";
    // Outra maneira de converter

    echo (int)$opcao1."<br>";
    echo (int)$opcao2."<br>";
    echo (int)$opcao3."<br>";
    echo (int)$opcao4."<br>";


    echo "Fim de codigo!";


    //intval() é uma função que converte uma variável para um inteiro em PHP. Permite especificar uma base numérica.
    //(int) é um operador de cast que também converte uma variável para um inteiro, mas sempre assume a base 10 e é mais curto e direto que intval().