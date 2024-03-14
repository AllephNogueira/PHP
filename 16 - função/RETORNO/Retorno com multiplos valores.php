<?php


    // Retorno com varias informações


    function meuVeiculo($placa, $km, $cor, $nome){
        

        $nome = "Sr $nome"; // $podemos fazer assim também.

        return [$placa, $km, $cor, $nome];

    }


    // Preencher os dados do veiculo

    
    $placa = "PPN6B11"; // Indice 0
    $km = "190.000";    // Indice 1
    $cor = "Prata";     // Indice 2
    $nome = "Alleph";   // Indice 3

    // Chamar a função e passar os dados

    $dados = meuVeiculo($placa, $km, $cor, $nome);

    // Imprimir a funçao

    print_r($dados);

    // Agora vamos imprimir somente o KM indice 1

    echo "<br> O KM total do seu carro é: ". $dados[1];

    // Agora formatando o texto corretamente

    echo "<br> Bem vindo $dados[3], seu veiculo esta com a KM $dados[1]";



