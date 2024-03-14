<?php

    $numero = 5;
    $contador = 0;
    $total = 0;
    $nome = "Alleph";


    // is_int é uma funcao para verificar se o numero é inteiro
    // Se for verdadeiro no caso inteiro 
    // 1 = Verdadeiro
    // 2 = Falso
    echo is_int($numero);
    echo "<br>";
    


 
    if (is_int($numero)){   
    //Se a is_int falar que o numero que esta na variavel for inteiro, entramos aqui. 
        echo "Confirmado";   
        echo "Seu numero é inteiro";
        echo "<br>";
        echo "Seu numero digitado é $numero";
        
    }



    echo "<br>";



    // Verificar se o numero é float usando o
    if(is_float($numero)){
        echo "Confirmado";
        echo "O seu numero é um float";
    }




    // Aspas duplas para colocar variavaveis

    echo "Seu numero foi $numero <br>";
    echo 'Seu numero foi $numero <br>';

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Observe a diferença


    // Descobrir se a variavel usa uma string

    

    if(is_string($nome)){
        echo "Confirmado";
        echo "A variavel nome é uma string e esta com os dados de $nome";
    }

    

    if(is_string($numero)){
        echo "A variavel $numero é uma string";
    }

    echo "<br>";
    echo "<br>";


    // Agora vamos verificar se o valor que esta dentro da variavel e nulo

    echo "_____________________________________________________________";
    echo "<br>";

    $checkNulo = null;

    if(is_null($checkNulo)){
        echo "Voce precisa digitar algo.";
    }else{
        echo "Obrigado, estamos atualizando seus dados.";
    }


?>