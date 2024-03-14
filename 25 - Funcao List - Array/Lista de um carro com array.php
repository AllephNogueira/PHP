<?php

    function EncontrarVeiculo($opcao){

        
    $veiculos = ["Jaguar", "3.0", "Azul", "2018", "Teto Solar", "Automatico"];
            list($nome, $potencia, $cor, $ano, $opcional, $cambio) = $veiculos;

    echo "Escolha a opção que deseja consultar";
    echo "1 - NOME \n 2 - POTENCIA DO MOTOR \n 3 - COR DO VEICULO \n 4 - ANO DO VEICULO \n 5 - OPCIONAL DO VEICULO  \n 6 - TIPO DO CAMBIO\n";

    echo "\n";

    // Tipos de mensagens para cada opcao
    $nome_Veiculo = "Seu veiculo é: ";
    $potencia_Veiculo = "Seu veiculo tem potencia de: ";
    $cor_Veiculo = "Seu veiculo é da cor: ";
    $ano_Veiculo = "Seu veiculo é do ano: ";
    $opcional_Veiculo = "Seu veiculo tem o opcional: ";
    $cambio_Veiculo = "Seu veiculo tem o cambio: ";

    switch($opcao){
        case 1:
            echo $nome_Veiculo. $nome;
            break;
        case 2:
            echo $potencia_Veiculo. $potencia;
            break;
        case 3: 
            echo $cor_Veiculo. $cor;
            break;
        case 4:
            echo $ano_Veiculo. $ano;
            break;
        case 5:
            echo $opcional_Veiculo. $opcional;
            break;    
        case 6:
            echo $cambio_Veiculo. $cambio;
            break; 
        default;
            echo "Opção nao encontrada, digite o codigo corretamente.";

    }

    }


    echo "Digite a opcao desejada";
    $opcao = 4;
    EncontrarVeiculo($opcao);



    