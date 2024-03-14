<?php

    // Só podemos criar o else apos o if

    // Primeiro if
    // Depois Else
    // Tambem podemos ter else if


    $n1 = 10;
    $n2 = 20;


    // No caso do IF / Else IF ele vai avaliar e vai entrar na primeira opção que ele achar verdadeira.

    if ($n1 > $n2 ){ // Se n1 for maior que n2 entramos aqui.
        echo "Entramos no primeiro IF<br>";


    } else if ($n1 < $n2){ // se n1 for MENOR que n2 entramos aqui.
        echo "Entramos no primeiro ELSE IF<br>";


    } else { // Se tudo sair como falso, entramos no else.
        echo "Todas as instruções sao falsas, entramos no ELSE<br>";
    }

