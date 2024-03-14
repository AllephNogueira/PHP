<?php

    // Estrutura foreach
    // Ela é orientada a um array = lista


    $nomes = ['Alleph', 'Fernanda', 'Livia', 'Larissa', 'Valeria', 'Jane', 'Crixus', 'Amora', 'Pedro', 'Gabriel', 'Lorenzo', 'Felipe', 'Citroen', 'C4', 'GNV'];

    echo "Total de nomes em minha lista: ".count($nomes). "<br><br>";

    // essa estrutura foreach serve para imprimir todos os itens dentro do array
    // $nomes = meu array/lista
    // $nome = uma variavel para onde estou passando toda minha lista.
    foreach($nomes as $nome){
        echo "O indice dos nomes é $nome <br>";
        if ($nome == "Crixus"){
            echo "Esse é o dono do servidor<br><br>";
        }
    }

