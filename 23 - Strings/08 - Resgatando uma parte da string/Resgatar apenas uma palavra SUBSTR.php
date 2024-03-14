<?php

    $frase = "Cadê meu queijo? Ele estava aqui em cima";


    // Variavel onde vamos tirar as palavras
    // Inicio de onde vamos começar a palavra
    // Final - ate onde vamos contar.
    echo substr($frase, 9, 7). "<br>";
    echo substr($frase, 22, 6);


    echo "<br>" . substr($frase, 9, -2); // Vai da indice 9 ate o final -2