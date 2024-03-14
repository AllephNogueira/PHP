<?php

    function incremento($x){

        // Aqui estamos fazendo
        // 0 < 30 ? correto
        // entao adicione de 1 em 1

        // Entao C vai adicionar de 1 em 1 ate chegar no 30
        for ($c= 0; $c < $x; $c++){

            // Enquanto C for menor que 30
            // Adicione de 1 em 1 no C
            // Ate chegar no 30
            echo $c. "<br>";
        }
    }


    function decremento($i){

        // nesse caso aqui, estamos indo de 100 ate 30.
        // 100 > 30 ? correto 
        // entao retire de 1 em 1
        // Entao C vai remover de 1 em 1 ate chegar no 30
        for ($c= 100; $c > $i; $c -- ){

            // Traducao do codigo, enquanto C for maior que 0 retire de 1 em 1 do C
            // Quando a condição der negativa ai ele para de rodar o programa.
            echo $c. " - ";
        }


    }


    $contador = 30;

    incremento($contador);
    decremento($contador);