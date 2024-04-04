<?php
    $arr = [20,40,6,8,10,14,15,16,17,18,19,22,35,36,37,38,39,40,45,48,49,51];

    $slice1 = array_slice($arr, 1, 4); // Pegando o elemento 1=(40)    &&     pegando ate o elemento 4=(10)

    print_r($slice1);  

    $slice2 = array_slice($arr, 3, 5); // agora vamos pegar do 8 ate o 14

    print_r($slice2);

    $elementosArray = array_slice($arr, 0, 3); // pegando do 0 ate o elemento 3
    print_r($elementosArray);


    // Pegando agora do numero 10 ao 14
    $meuArr10a14 = array_slice($arr, 4, 5);
    print_r($meuArr10a14);


    // Agora se eu quiser omitir o indice final ele vai pegar todos os itens do inicial ate o fim do array

    $meuArrayTeste = array_slice($arr, 2); // Aqui estou mandando pegar do indice 2 ate o final da lista
    print_r($meuArrayTeste);


    // Aqui vamos pegar do indice 2, e vamos retirar 3 elementos
    // Vai imprimir do indice2 = 6
    // Ai vai contar no final da lista menos -3
    // Vai imprimir ate o 45
    $arrayContagemNegativa = array_slice($arr, 2, -3);
    print_r($arrayContagemNegativa);
?>