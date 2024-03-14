<?php


    $arr = range(1,300); // Inserir os numeros de 0 a 300, contando de 20 em 20

    echo implode(' - ', $arr). "\n"; // Imprimir meu array

    echo count($arr). "\n\n\n\n\n\n\n\n"; // Contagem do total de elementos.


    // Fazendo com array associativo

    $arrAs = ['Nome' => 'Alleph', 'Sexo' => 'Masculino', 'Idade' => '29'];

    echo implode(' - ', $arrAs). "\n";
    if(count($arrAs) > 1){
        echo "Meu array possui ". count($arrAs). " de dados\n\n\n\n\n";
    }else{
        echo "Meu array possui ". count($arrAs). " de dado\n\n\n\n\n\n";
    }

    echo (count($arrAs) > 1)? "Meu array possui ". count($arrAs). " de dados" : "Meu array possui ". count($arrAs). " de dado";
