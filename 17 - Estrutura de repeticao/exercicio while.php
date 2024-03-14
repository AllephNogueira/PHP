<?php

    $lista = ["Arroz", "Macarrao", 10, "Casa", 22, 1994, 03, 25, "Gasolina", "GNV", "Opa"];

    $arr = count($lista); // Aqui estamos passando para o contador a quantidade de itens da lista

    $contador = 0;

    while ($contador < $arr){ 
        // Aqui estou dizendo que enquanto contador O for menor que ARR 11 ele vai contar de 1 em 1


        

        if(is_string($lista[$contador])){
            echo $lista[$contador] . "<br>"; // Aqui estamos imprimindo o indice 

            // Contador = o indice que começa de 0 a (ARR = 11)
        }

        $contador++;
    }