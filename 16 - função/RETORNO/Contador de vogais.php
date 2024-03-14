<?php

    function countVowels ($nome){

        $nome = strtolower($nome); // Passando tudo para o minusculo

        $totalVogais = 0;

        $quantidadeLetras = strlen($nome); // Contar a quantidade de letras

        for ($contador = 0 ; $contador < $quantidadeLetras; $contador++){
            // Aqui vamos percorrer cada elemento do $nome
            
            $letraAtual = $nome[$contador]; // Essa é a maneira que o PHP percorre cada letra
            
            // Agora vamos colocar para armazenar as vogais com um IF

            if ($letraAtual == 'a' || $letraAtual == 'e' || $letraAtual == 'i' || $letraAtual == 'o' || $letraAtual == 'u') {
                $totalVogais++;

            }
        }


        return $totalVogais;


    }

    $nome = countVowels("Alleph");
    echo $nome;

