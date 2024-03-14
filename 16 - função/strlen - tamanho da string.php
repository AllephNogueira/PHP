<?php

    $nome = "Alleph";

    echo strlen($nome). "<br>"; // Vamos retornar o tamanho da string

    echo "$nome tem o total de ". strlen($nome). " caracteres<br><br>";


    // Comparando tamanho de nomes com strlen

    $usuario1 = "Alleph";
    $usuario2 = "Fernanda";


    $user1 = strlen($usuario1);
    $user2 = strlen($usuario2);



    if ($user1 > $user2){
        echo "O usuario 1 tem a maior quantidade de caracteres<br>";
        echo "Ele tem o total de ". $user1. " ". $usuario1;
    }else{
        echo "O usuario 2 tem a maior quantidade de caracteres<br>";
        echo "Ele tem o total de ". $user2. " ". $usuario2;
    }