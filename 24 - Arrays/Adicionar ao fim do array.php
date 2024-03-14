<?php


    $arr = []; // Meu array vazio.

    $arr[] = "Teste de array1"; // Adicionar ao final do array.



    for($contador = 0; $contador <= 30; $contador ++){    
    // Fazendo um loop para adicinar mais dados dentro dele
        $arr[] = "Adicionando um novo array de numero: $contador";
    }


    

    print_r($arr);





    // Agora fazendo em um array associativo.

    $arrAs = []; // Array vazio

    $arrAs['Carro'] = 'Ford Ka'; // Adicionando no final da lista

    for($i = 0; $i <=30 ; $i++){
        $arrAs[$i] = 'Contagem';
    }

    print_r($arrAs);