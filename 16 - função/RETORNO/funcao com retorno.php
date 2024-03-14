<?php

    // Funcao com retorno


    function Calculo($a,$b){
        
        return $a + $b; // Aqui estou dizendo para ele me retornar o valor dessa soma
    }


    echo Calculo(10,50); // Imprimir a funcao calculo com os parametros 10 e 50


    // Calculo par ou impar

    function ParouImpar($x){
        
        if( $x % 2 == 0){

            return true;   // Se for verdadeiro estou mandando ele me retornar 1/True
        }
    }

    echo ParouImpar(10);



    // agora vamos fazer um teste com if para verificar
    // Aqui estou dizendo que se o comando retornar 1, ele esta positivo se for 0 ele n aparece nada.

    if (ParouImpar(16) == 1){
        echo "<br>Comando verdadeiro";
    }

    // agora vamos armazenar o valor em uma variavel

    $armazenarVariavel = ParouImpar(16);
    echo "<br>". $armazenarVariavel;


    // Fazendo outra funcao pegando o nome

    function Dados(){
        return "<br>Alleph";   // Estou mandando retornar meu nome quando o usuario selecionar a funcao
    }

    echo Dados();