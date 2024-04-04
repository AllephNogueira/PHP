<?php

    // Criar um array com os valores Batata, Maça, Pera, Feijao e arroz;

    $legumes = ["Batata", "Maça", "Pera", "Feijão", "Arroz"];

    // Remover pera2 e feijao3

    $removidosDaLista = array_splice($legumes, 2, 2); // Começar a remover do elemento 2 e remover +2 elementos, sempre começa contando com ele mesmo.

    print_r($removidosDaLista);

    // Agora fazendo sem criar uma variavel


    $produtosLimpeza = ["Cloro", "Desinfetante", "Amaciante", "Sabao", "Detergente", "Pasta de Dentes", "Agua Sanitaria"];

    print_r(array_splice($produtosLimpeza, 1, 3)); // Produtos removidos sem usar variavel.


    // Agora aqui estamos fazendo sem acumular dentro de uma variavel
    // Vamos exibir somente a lista sem os itens que foram removidos.
    $documentosCarro = ['IPVA', 'SEGURO', 'DUDA', 'VISTORIA', 'GRT'];

    array_splice($documentosCarro, 1, 2);
    print_r($documentosCarro); 

    // Outra forma de fazer perguntando ao usuario oque ele deseja exibir

    $lugares = ["Cabo Frio", "Buzios", "Arraial do Cabo", "Angra", "Minas", "Sao Paulo", "Capitolio", "Estados Unidos", "Mexico"];

    $backup = $lugares; // Lista com todos os itens
    $lugaresQueJaViajei = array_splice($lugares, 0, -2); // Itens removidos da lista
    $lugaresQueNaoViajei = $lugares; // Lista com os itens que não foram removidos.

    $opcao = 3;

    switch ($opcao){
        case 1:
            echo "Lugares que ja viajei \t";
            print_r($lugaresQueJaViajei);
            break;
        case 2:
            echo "Lugares que não viajei \t";
            print_r($lugaresQueNaoViajei);
            break;
        case 3:
            echo "Todas as opções \t";
            print_r($backup);
            break;
        default:
            echo "Opção não encontrada!";
    }

