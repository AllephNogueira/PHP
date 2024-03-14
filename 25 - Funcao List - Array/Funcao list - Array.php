<?php

    $pessoa = ["Alleph", 29, "Motorista", "Masculino"];  // meu array

    print_r($pessoa);

    list($nome, $idade, $profissao, $sexo) = $pessoa;   // Minha lista colocando cada um dos dados.

    echo $idade. "\n";


    // Fazendo um array de carro e atribuindo a uma lista

    $veiculo = ["Citroen", "C4 Lounge", "Prata", "190850", 2016];

    list($modelo, $marca, $cor, $km, $ano) = $veiculo;



    echo "Agora vamos imprimir a cor: ". $cor. "\n\n";

    echo "Digite a opcao que você deseja encontrar. \n 1 MOLDEO \n 2 MARCA \n 3 COR \n 4 KM \n 5 ANO\n";

    $opcao = 2;

    switch($opcao){
        case 1:
            echo "A cor do seu veiculo é: ". $cor;
            break;
        case 2:
            echo "O km do seu veiculo é: ". $km;
            break;
        default:
            echo "Opcao não encontrada";
            break;
    }
