<?php
    $arr = [20,40,6,8,10,14];

    $slice1 = array_slice($arr, 1, 4); // Pegando o elemento 1=(40)    &&     pegando ate o elemento 4=(10)

    print_r($slice1);  

    $slice2 = array_slice($arr, 3, 5); // agora vamos pegar do 8 ate o 14

    print_r($slice2);

    $elementosArray = array_slice($arr, 0, 3); // pegando do 0 ate o elemento 3
    print_r($elementosArray);
?>