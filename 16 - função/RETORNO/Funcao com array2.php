<?php

    function maiorQueSete($x, $y, $opcao){ // $x numero que vamos iniciar // $y ate que numero vamos

        $Array = [];
        $newArray = [];

        for ($contador = $x ; $contador < $y; $contador++){

            array_push($Array, $contador);

            // Agora quero contabilizar somente os maiores que 7

            if ($contador > 7 ){

                array_push($newArray, $contador); // Agora aqui estou dizendo que quando o numero for maior que 7 ele vai passar para dentro do newArray

            }

        }

        if ($opcao == 7){

        return implode(' - ', $newArray);

        }

        return implode(' - ', $Array);
    }

    $inicio_contagem = 1;
    $fim_contagem = 50;
    $opcao = 7; // Opcao = 7 vamos contar somente os maiores que 7

    echo maiorQueSete($inicio_contagem, $fim_contagem, $opcao); // Digite o numero que vamos iniciar // Digite o numero que vamos parar



    