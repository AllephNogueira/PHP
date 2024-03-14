<?php

    $str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";


    $testeEncontrar = strpos($str, "strpos"); 

    echo $testeEncontrar. "<br>"; // Aqui vamos retornar a posição que ela esta.

/////////////////////////////////////////////////////////////////////////////////////////////////


    // Agora vamos pesquisar uma palavra que nao existe

    $testeEncontrar2 = strpos($str, "Java"); // Aqui ele nao vai imprimir nada pq nao existe JAVA no texto

    echo $testeEncontrar2. "<br>"; 

    if($testeEncontrar2 === false){
        echo "Palavra não encontrada <br>";
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // Agora vamos encontrar usando uma variavel

    $encontrar = "podemos"; // Digite a palavra que voce quer localizar.

    echo "Encontramos no indice: ". strpos($str, $encontrar);