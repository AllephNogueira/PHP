<?php

    $arr = [10,20,30,40,50,60,70,80,90,100];

    $i = 0;


    //while ($i < 10){
    while ($i < count($arr)){ // Aqui estou pedindo para ele contar quantos elementos tem na lista.

    // Ficando assim, enquanto $i for menor que count($lista) execute o codigo
    //                                          count seria = 10 pq temos 10 elementos na lista.

        $numeroAtual = $arr[$i];

        if ($numeroAtual == 30 || $numeroAtual == 60){
            echo "Numeros bloqueados: $numeroAtual <br>";


            $i ++;

            continue;
        }


        echo "Elementos: $numeroAtual <br>";
        $i++;

    }