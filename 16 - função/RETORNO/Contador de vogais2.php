<?php

    function Contador($nome){
        $nome = strtolower($nome); // Passando tudo para minusculo
        $totalVogais = 0; 
        $contadorLetras = strlen($nome); // Acumulando o total de letras dentro da variavel

        for($contador = 0; $contador < $contadorLetras; $contador++){
            // Acumulando as letras dentro de uma variavel
            $vogais = $nome[$contador]; // Passando de letra por letra

            // Agora vamos fazer um if para verificar e adicionar caso seja vogais

            if ($vogais == "a" || $vogais == "e" || $vogais == "i" || $vogais == "o" || $vogais == "u"){
                // Caso seja uma dessas vogais vamos colocar dentro de uma variavel 
                $totalVogais++;
            }
        }

        return $totalVogais;


    }
    // Digite o nome do usuario que voce quer testa a função

    $nome = "Alleph Nogueira"; // Nome do usuario

    // Agora vamos chamar a funcao

    
    $nome = Contador($nome);

    echo $nome;

    