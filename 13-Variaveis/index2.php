<?php

    // Criar 3 variaveis com diferentes dados
    // Imprimir na tela


    // Variavei do tipo inteiro

    $anoNascimento = 1994;

    // Varivavel do tipo string

    $nomeUsuario = "Alleph";


    // Variavel do tipo float

    $anoQueEstamos = 2024;

    // Junção das 3 variaveis

    $idade = $anoQueEstamos - $anoNascimento;

    
    echo "Bem vindo $nomeUsuario, como estamos em $anoQueEstamos, você esse ano esta fazendo $idade";
    echo "<br>";

    // Agora vamos fazer como se fosse uma lista


    $velocidadeMaxima = 210;
    $marca = "Citroen";
    // Array/Lista com "apelido / dados" 
    // primeiro vem o objeto, apelido, id e depois associamos a informaçao
    // E como se fosse uma variavel e o dado que esta dentro dela.
    $itens = ['Freio' => 'ABS', 'Motor' => '2.0', 'Cambio' => 'Aisin 6 Marchas'];
    echo "<br>";

    echo "Seu veiculo adquirido é $marca, tem a velocidade maxima de $velocidadeMaxima, $itens[Cambio]";




?>