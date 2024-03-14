<?php

    
    // Fazendo tudo ficar minusculo para evitar erros de localização
    $texto = strtolower('Alleph Nogueira de Oliveira, Nogueira de Oliveira, Nogueira, Oliveira');

    // Mandando encontrar em texto a palavra "nogueira"
    $encontrar = strrpos($texto, "nogueira");

    // Se caso a resposta for negativa, retornamos um false.
    if ($encontrar === false){
        echo "Palavra não localizada";
    }

    echo $encontrar. "<br><br><br><br><br><br>";



    // Agora vamos testar localizando o indice da primeira palavra


    echo strpos($texto, "nogueira");