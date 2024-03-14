<?php
    // Criar um array com string

    $arr = ['Alleph', 'Crixus', 'Amora', 'Valeria', 'Gabriel'];

    // Formatando o array para dentro de uma nova variavel

    $novoArr = implode(' - ', $arr). "<br>";

    // Imprimindo o array

    echo $novoArr;


    // Contagem de quantos itens tem na lista

    echo count($arr). "<br>";

