<?php

    // Resgatar elemento de um array
    

    $arr = [1,2,3,4,5,6];

    // Remover elementos

    $removidos = array_splice($arr, 1, 3); // Aqui o elemento começa a contar dele mesmo no caso eu removi do indice 1 ate 3 sendo assim vai sair os numeros 234
    print_r($arr); // Aqui esta meu array com os elementos JA removidos
    print_r($removidos); // Aqui esta meu array com os elementos que eu removi.



    // Agora quero remover do indice 2 ate o final
    $arr = [1,2,3,4,5,6];

    $removidosTotal = array_splice($arr, 2); // Remover do 3 para frente.
    print_r($arr);
    print_r($removidosTotal);


    // Agora remover com indice negativo
    // Vamos remover do indice 1 ate o indice -1
    // No caso vai ficar o numero 1 e 6 apenas
    echo "\nIndice negativo\n";

    $arr2 = [1,2,3,4,5,6];

    $removidos2 = array_splice($arr2, 1, -1);
    print_r($arr2);
    print_r($removidos2);
?>