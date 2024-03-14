<?php

    // Utilizando o array push

    $lista = []; // criando um array vazio
    $lista2 = [];



    for($contador=1; $contador<10; $contador++){

        // Aqui colocamos o array e , oque queremos inserir nele.
        array_push($lista, $contador); 

        // tambem podemos fazer de outra forma

        $lista2[$contador] = $contador;



    }

    print_r($lista);
    echo "<br><br>";
    print_r($lista2);


    echo "<br><br> Array com numeros IMPARES <br><br>";



    // Novo array 

    $novo = [];  // Array vazio

    for ($contagem =10 ; $contagem <20+1; $contagem ++){

        $novo[$contagem] = $contagem;

        // imprimir apenas os numeros impares

        if ($novo[$contagem] % 2 == 1){

            echo "<br>Esse é nosso numeros impares ". $novo[$contagem];

        }
    }

    echo "<br><br><br><br>";


    echo implode(' - ', $novo);