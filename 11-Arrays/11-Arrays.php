<?php


    $a = [1, 2, 3, 4];


    // aqui é uma maneira de converter o array para uma string
    // ou seja print_r é para converter os dados em um texto para aparecer na tela
    print_r($a);

    echo "<br>";


    // aqui estou imprimindo o indice 0 que no caso é o NUMERO 1
    // Toda lista/Arrays começa com 0
    echo $a[0];

    echo "<br>";
    echo "<br>";





    // iniciando array como se fosse uma lista
    // Acessando o item do meio

    echo "________________________________________________";
    echo "<br>";
    echo "<br>";
    $mercado = ["Arroz", 40.90, "5KG", "Tio João"];

    print_r($mercado); // Acessando todo os itens da lista

    echo "<br>";

    echo "Preço: ";
    print_r($mercado[1]); // Acessando o segundo item da lista
    echo "<br>";
    echo "<br>";
    echo "<br>";



    // Outra maneira de acessar e fazer uma lista mais correta
    // Imprimindo a lista completa com divisões
    echo "________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Produto: ";
    print_r($mercado[0]); 
    echo " | Preço: ";
    print_r($mercado[1]);
    echo " | Quantidade: ";
    print_r($mercado[2]); 
    echo " | Marca: ";
    print_r($mercado[3]);


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "________________________________________________";
    //  ARRAYS Associativo
    // Aqui vamos ter o indice como se fosse representando o nome do item
    // Nesse exemplo aqui usamos a chave ID e valor Alleph
    // Lembrar que tudo deve ser entrar aspas
    echo "<br>";
    echo "Arrays Associativo";
    echo "<br>";
    echo "<br>";

    $usuario = ['id' => 'Alleph', 'senha' => '123456'];

    print_r($usuario);
    echo "<br>";

    // Podemos acessar o array por chave tambem

    print_r($usuario['id']); // Aqui estamos acessando o ID

    // Arrays associativo criando lista de mercado

    echo "<br>";
    echo "<br>";
    echo "<br>";
    $listaMercado = ['Arroz' => 'Tio João', 'Preco' => '40,90', 'Quantidade' => '5KG'];
    print_r ($listaMercado);

    echo "<br>";
    echo "<br>";
    echo "Preco: "; 
    echo $listaMercado['Preco']; // Estou imprimindo apenas o preco
    echo "<br>";
    echo "<br>";
    echo "<br>";



    echo "________________________________________________";
    // Meu exercicios 
    // Criar um arquivo PHP 
    // Criar um array com caracterista de um carro
    // Imprimir as duas tabelas

        // Arrays Associativo


    $carro = [ // Lista de carro
        'Placa' => 'PPN6B11', 
        'Modelo' => 'C4 Lounge', 
        'Ano' => '2016', 
        'Combustivel' => 'Gas',
        'Blindado' => false,
        'batida' => true ]; 

    echo "<br>";
    print_r ($carro); // Imprimindo a lista
    echo "<br>";
    echo "<br>";


    echo $carro['Placa']; // Imprimindo o valor de PLACA
    echo "  |  ";
    echo $carro['Modelo']; // Imprimindo o modelo do carro
    echo "<br>";
    echo "<br>";

        // Arrays 
    
    $carro2 = ['PPN6B11', 'C4 Lounge', 'Citroen', 'Gas', '186.000'];

    print_r($carro2);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Placa: ";
    print_r($carro2[0]);
    echo " |  Modelo: ";
    print_r($carro2[1]);
    echo " |  Fabricante: ";
    print_r($carro2[2]);
    echo " |  Combustivel: ";
    print_r($carro2[3]);
    echo " |  KM: ";
    print_r($carro2[4]);
    echo "<br>";
    echo "<br>";

    // Aqui podemos jogar os dados dentro de uma variavel para ficar mais facil

    $placa = $carro2[0];
    $modelo = $carro2[1];

    echo "A placa do carro encontrada é $placa, com o modelo de $modelo";

    echo "<br>";
    echo "<br>";
    echo "________________________________________________";
    echo "<br>";
    echo "<br>";
    // Array Associativo com caracterista de uma pessoa
        // Vamos criar uma carteira da vacina para os pets

    $pets = [
        'Nome' => 'Crixus',
        'Idade' => 4,
        'Cor' => 'Branco/Amarelado'
    ];


    print_r($pets);
    echo "<br>";

    // Transferindo os dados do Array para dentro de uma variavel

    $Nome = $pets['Nome'];
    $Idade = $pets['Idade'];
    $Cor = $pets['Cor'];
    

    // Verificando o se ele é maior que 5 anos, se for ele precisa tomar vacina 

    // Outra maneira de fazer
    //if($pets['Idade'] >= 5){   = Aqui estou entrando na CHAVE IDADE
        //if($pets[1] >= 5){  == Aqui estou acessando a CHAVE 0 que é tambem a IDADE=5
    if($Idade >= 5){
        echo "<br>";
        echo "O $Nome, precisa tomar a vacina";
    }
    else{
        echo "<br>";
        echo "O $Nome, não precisa tomar vacina porque ele tem apenas $Idade anos.";
    }









?>