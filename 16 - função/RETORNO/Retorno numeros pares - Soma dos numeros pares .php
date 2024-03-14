<?php

    function sumEvenNumbers($numero){ // Criando a funcao

        $soma = 0;
 

        // Agora vamos acumular a quantidade de numeros pares escolhidos

        for ($contador = 1; $contador <= $numero; $contador++){

            if ($contador % 2 == 0 ){
                $soma++;
            }
        }

        return $soma;
    }


    // Forcando o numero a ser convertido para inteiro
    $numero = intval(10); // Digitando o numero escolhido


    // Agora vamos acumular o resultado dentro de uma variavel
    // Aqui estamos pegando o RETURN e acumulando dentro de uma variavel
    $resultado =  sumEvenNumbers($numero); 


    // Agora vamos imprmir o resultado 

    echo "Voce escolheu o numero $numero, e voce tem o total de: ". $resultado. " numeros pares";

