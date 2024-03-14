<?php
    function CalcularDesconto ($valor, $produto){

        $eletro = 10; // Porcentagem de desconto
        $vestuario = 20; // Porcentagem de desconto
        $alimentos = 5; // Porcentagem de desconto
        $desconto = null; // Porcentagem de desconto

        echo "Eletro = 1   -   Vestuario = 2   -   Alimentos = 3<br><br>";

        echo "Digite o valor do produto : $valor <br>";
        echo "Digite o selecione o produto: $produto <br>";

        switch ($produto){
            case 1:
                echo "Voce selecionou eletronicos você tem 10% de desconto.<br>";
                $desconto = $valor  * $eletro /100; // Calcula o valor do desconto
                echo "O seu desconto foi $desconto <br>";
                        // Subtrai o valor do desconto do valor original
                echo "Entao seu produto vai sair no valor de :". $valor - $desconto;
                break;

                case 2:
                    echo "Voce selecionou vestuario você tem 20% de desconto.<br>";
                    $desconto = $valor  * $vestuario /100; // Calcula o valor do desconto
                    echo "O seu desconto foi $desconto <br>";
                            // Subtrai o valor do desconto do valor original
                    echo "Entao seu produto vai sair no valor de :". $valor - $desconto;
                    break;

                case 3:
                    echo "Voce selecionou alimentos você tem 5% de desconto.<br>";
                    $desconto = $valor  * $alimentos /100; // Calcula o valor do desconto
                    echo "O seu desconto foi $desconto <br>";
                            // Subtrai o valor do desconto do valor original
                    echo "Entao seu produto vai sair no valor de :". ($valor - $desconto); // Fazendo meu echo calcular primeiro antes de enviar a mensagem para o usuario
                    break;

                default:
                    echo "Produto não encontrado";
        }
    }

    $valor = 100;  // Substitua 100 pelo valor que você deseja calcular o desconto
    $produto = 4;

    CalcularDesconto($valor, $produto);