<?php

    $a = 5;
    $b = 2;

    $total = $a / $b;

    

    if(is_float($total)){ // Checar se o numero é float
    

        echo $total;
        echo "<br>Vamos pegar o resultado agora de float para inteiro.";
        echo "<br>Lembrar que quando mudamos de forma automatica chamamos o recurso de AUTO CAST.";

        // O resultado aqui foi 2.5
        // Eu quero pegar esse resultado de float para inteiro 
        // Formando o numero 2

    }
    echo "<br>";
    echo "<br>";


    // Concatenar os dados


    $nome = "Alleph";
    $sobrenome = "Nogueira";


    $nomeCompleto = $nome . " " . $sobrenome;  // Aqui estou juntando as duas strings em apenas uma

    if(is_string($nomeCompleto)){ // Verificar se é uma string

        echo "<br> $nomeCompleto";

    }


?>