<?php


    $array = ['Suco', 'Cafe', 'Pao', 'Refri', 'Pastel']; // Minha lista
    $string = implode(', ', $array); // Juntar lista em uma variavel
    echo $string; // Imprimir variavel



    // contagem total da minha lista

    
    echo "<br>Total de itens da minha lista: ". $contador = count($array); // contando o total de itens da lista.

    echo "<br><br><br>";




    // Imprimindo a lista 2

    $array2 = array('Maçã', 'Banana', 'Cereja'); // Minha lista
    $string2 = implode(' - ', $array2); // Passando para dentro de uma variavel

    echo $string2; // Imprimindo em forma de variavel
    echo "<br><br><br>";
    print_r ($array2); // Imprimindo em forma de arrays com os indices.

    