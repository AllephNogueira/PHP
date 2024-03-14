<?php

    // Criar uma funçao que receba nome e preço

    function produtos($nome, $preco){
        $listaProdutos = [$nome => $preco];

        

        // Agora vamos retornar apenas o itens com preço maior que 10.00$

        if ($listaProdutos > 10 ){
            $produtosMaior = $listaProdutos;

            return $produtosMaior;
        }

    }

    // Agora vamos passar os dados

    $nome = "Arroz";
    $preco = 8;

    print_r(produtos($nome, $preco));

    

