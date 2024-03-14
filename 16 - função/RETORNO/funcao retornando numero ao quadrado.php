<?php

    // Criar uma função que retorne numero ao quadrado

    function numeroQuadrado($q){

        return $q * $q; // numero ao quadrado é sempre ele * ele mesmo
        // 5*5 ; 10*10/ 2*2 e por ai vai.

        // outra forma de fazer é 

        //return $q ** 2;

    }

    $nQuadrado = numeroQuadrado(4);

    echo $nQuadrado . " Seu numero ao quadrado.<br>";


    function aoCubo ($c){

        return $c * $c * $c;

        // outra forma de fazer tambem é 

        //return $c ** 3;

    }

    $cubo = aoCubo(10);
    echo $cubo . " Seu numero ao cubo.<br>";
