<?php

    $arr = [ // Array com linhas e colunas.
        [1,2,3],  // Array 0
        [4,5,6],   // Array 1
        [6,7,8],    // Array 2
        [9,10,11]   // Array 3
    ];

    print_r($arr);
    echo "\n\n\n\n\n\n";


    echo $arr[0][1]. "\n";   // Aqui estou acessando a primeira fila, e indice 2
    echo $arr[0][2]. "\n";   // Aqui estou acessando o array 0, elemento 2
    echo $arr[3][0]. "\n";  // Acessando o array 3, elemento 0 = 9

    echo "Quantidade de arrays: ". count($arr). "\n"; // Contando a quantidade de arrays.
    echo "Quantidade de elementos dentro do array 0: ". count($arr[0]). "\n"; // Contando a quantidade de elementos dentro do array 0



    // Agora vamos fazer um exemplo usando nomes

    $familias = [
        ["Alleph", "Fernanda", "Crixus", "Amora"],   /// Array 0 
        ["Jane", "Larissa"],                        /// Array 1 
        ["Valeria", "Bethoven"]                     /// Array 2 
    ];

    echo $familias[0][0]."\n";      // Acessando o array 0 elemento 0 = Alleph

    echo $familias[0][0]. " & ". $familias[2][0]. "\n"; // Formando uma familia.


    // Agora vamos fazer com array associativos


    $dados = [
        ['Nome' => ['Alleph', 'Fernanda', 'Larissa', 'Livia']],
        ['Sobrenome' => ['Nogueira', 'Ferreira', 'Oliveira']]
    ];

    var_dump($dados);

    echo $dados[0]["Nome"];