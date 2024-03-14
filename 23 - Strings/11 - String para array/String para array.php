<?php

    $frase = "Testando o explode."; // Transformando isso aqui em array

    $fraseArray = explode(" ", $frase); // Separando a frase em um array.
     // Em frase temos 3 elementos
    // 0 = Testando, 1 = O, 2 = explode.

    print_r($fraseArray); // Imprimindo o explode.

    echo implode(' - ', $fraseArray); 


    //////////////////////////////////////////////////////////////////
    // Outra forma de imprimir diretamente é
    echo "<br><br><br><br><br>";

    $dados = "Alleph Nogueira de Oliveira";

    // Lembrar que o "   espaço em branco  " é o demilitador onde ele vai entender que começa outro array.
    $dadosArray = explode(" ", $dados);   // Aqui estamos transformando uma variavel simples em um array.

    echo implode(" - ", $dadosArray). "<br>";

    print_r($dadosArray);



    //////////////////////////////////////////////////////////////////
    // Nao precisamos colocar dentro de outra variavel, apenas podemos seguir a sintaxe que também vai funcionar.
    echo "<br><br><br><br><br>";
    print_r(explode(" ", $dados));
    echo "<br>";
    echo implode(" - ", $dadosArray);


    


////////////////////////////////////////////////////////////////////////////////////////////////
    // Fazendo outro teste com outro delimitador
    echo "<br><br><br><br><br>";

    $veiculo = "C4, PPN6B11, Citroen"; // Aqui estamos usando a virgula para separar.
    $veiculoArr = explode(",", $veiculo);
    print_r($veiculoArr);
    echo "<br><br>";
    print_r(explode(",", $veiculo)); // Aqui estamos fazendo tudo em uma só linha
    echo "<br><br>";




//////////////////////////////////////////////////////////////////////////////////////////////////

    for($c = 0; $c < count($veiculoArr); $c++){ // Fazendo um for para imprimir os itens do array.
        echo $veiculoArr[$c]. "<br>";
    
    }

    echo "<br><br>";

    foreach($veiculoArr as $lista){ // Outra forma mais facil de imprimir o array.
        echo $lista. "<br>";
    }