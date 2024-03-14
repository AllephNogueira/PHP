<?php

    // Resgatando uma parte da string com a funcao substr

    $str = "Essa é a minha string";


    // STRING PAI , INDICE INICIAL , COMPRIMENTO DA PALAVRA.
    $minha = substr($str, 16, 5);

        // str = é a variavel onde esta minha string
        // 16 é onde eu começo a contar no meu texto
        // 5 é a quantidade de caracteres que eu quero que pare

        // Aqui estou mandando ele começar na casa 16 e parar 5 casas depois
            // oque me traz o retorno de * strin *

    echo $minha. "<br>";

    ///////////////////////////////////////////////////////////////////////////////////////

    $str2 = "Testando mais uma vez a funcao substr";

    $teste2 = substr($str2, 9, 4); // Aqui pegamos o indice 9 com 4 digitos = mais.

    echo $teste2. "<br>";

    //////////////////////////////////////////////////////////////////////////////////////


    // Agora vamos pegar de outra maneira, fazendo imprimir do indice ate o final

    echo substr($str2, 9). "<br>"; // Aqui pegamos do indice 9 ate o final.

    echo substr($str2, 9, -3); // Aqui pegamos do indice 9 e removemos 3 letras do ultimo