<?php

    // Criar uma funcao com array associativo

    // Produtos / Preco
    $arr = [
        'Arroz' => 37,
        'Feijao' => 8,
        'Macarrao' => 5,
        'Frango' => 12.80,
        'Ovo' => 7.99,
    ];

    // Agora vamos fazer uma funçao para receber o Array 
    // E depois dizer quais itens sao maiores que 10,00

    function ItensCaro($arr){

        $arrItenscaro = []; // Iniciar um array vazio

        foreach($arr as $item => $preco){ // Iniciando uma varredura em Arr e passando para 2 variaveis

            // Item = Produtos     / Preco = Preco

            if ($preco > 10){   // Verificando se preço é maior que 10

                // Se preço for maior que 10.
                // Colocamos o item no array que estava vazio.

            array_push($arrItenscaro, $item);   

            }
        }


        return $arrItenscaro;

    }

    // Falamos que a funçao vai receber como parametro o array ja criado.
    // Vamos colocar dentro da variavel a funcao
    $novoArr = ItensCaro($arr);

    print_r($novoArr); // Vamos imprimir a funcao