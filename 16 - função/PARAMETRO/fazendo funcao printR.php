<?php

    // Primeiro vamos fazer um array

    $arr = [10,50,30,50,70,50,60,70,60,40,30];


    // agora vamos fazer uma funcao para esses dados entrar

    function imprimir($x){
        echo implode(' - ', $x);
    }


    imprimir($arr);
