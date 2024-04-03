<?php
    $arr = range(1, 20); // Criando um array de 1 a 20;

    print_r(array_chunk($arr, 4));
    echo "\n";

    // Dividimos o array em grupo de 4
    // Como se fosse um time de futebol cada equipe pode ter 4 membros.


    // Transferindo tudo para uma variavel

    echo "Vamos dividir os grupos agora de 5";

    $arr2 = range(1 ,100);
    $arrNew = array_chunk($arr2, 5);

    print_r($arrNew);

    // Agora quero ver apenas o primeiro grupo

    print_r($arrNew[0]);



?>