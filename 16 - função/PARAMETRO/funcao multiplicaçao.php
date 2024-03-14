<?php

    // Criar uma funcao para multiplicar 3 dados.

    function multiplicar($a, $b, $c){
        echo $a * $b * $c. "<br>";
    }

    // Aqui vamos INVOCAR a funcao
    multiplicar(10,15,30);


    // Tambem podemos dizer os numeros que queremos multiplicar


    $numero1 = 10;
    $numero2 = 30;
    $numero3 = 65;

    multiplicar($numero1, $numero2, $numero3);