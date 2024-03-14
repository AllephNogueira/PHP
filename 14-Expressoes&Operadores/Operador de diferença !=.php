<?php

    // Operador de diferença, ele precisa ser diferente para entrar no scopo do if


    $a = 10;
    $b = "10";


    if ($a != $b){
        echo "Os numeros são diferentes <br>";
    }
    else{
        echo "Os numeros não são diferentes <br>";
    }



    // é igual mais não é identico
    // Aqui vamos avaliar se o numero não é identico.

    // No caso quando o numero é identico ele nao deixa passar.
    // O numero não pode ser identico, o nome do operador é: Não identico.
    if ($a !== $b){

        echo "Dados diferente";
        echo "<br> Os dados são 'Diferentes' $a $b <br> ";
        echo "Teste de dados $a: " .gettype($a) . " $b ".gettype($b);
    }

    if (1 !== 2){
        echo "<br>Esse numero não é identico ao outro.";
    }