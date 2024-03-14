<?php

    // Adicinando itens ao meu array

    $arr = [];


    $arr[1] = "Teste"; // Arr indice 1 recebe a string TESTE
    $arr[2] = "Amigo";  // Arr indice 2 recebe AMIGO


    print_r($arr); // Imprimir todo o array

    print_r($arr[2]); // Imprimir o indice 2



    echo "\n". implode(' - ', $arr);