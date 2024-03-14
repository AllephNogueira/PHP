<?php
    // concatenação

    echo "Testando ". "a ". "concatenacao";

    echo "<br>Devemos sempre usar o ponto para unir tudo.";


    $a = 10;
    $b = 10;

    echo "<br>Exemplo de juntar: ". $a + $b . " aqui estou somando as duas variaveis $a + $b";

    echo "<br>Outro exemplo: ". $a.$b. " aqui estou juntando as duas variaveis $a, $b";

    // Exemplo de testa todos os dados
    // Como se fosse uma fica de banco

    $nome = "Alleph";
    $sobrenome = "Nogueira";
    $diaNascimento = 22;
    $mesNascimento = 03;
    $anoNascimento = 1994;
    $email = "allephn@hotmail.com.br";
    $cep = "24465760";



    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    //           Listas  / Arrays
    // Formando um login com base nas informações de Nome, Sobrenome e dia.

    $dadosGeral = $nome. $sobrenome. $diaNascimento;

    echo "<br> Seu login surgerido é: ".$dadosGeral;
    echo "<br>";

    //Listas e Arrays
    $dadosUsuario = ["Alleph", "Nogueira", "22", "allephn@hotmail.com.br"];
    print_r ($dadosUsuario);
    echo "<br><br>". $dadosUsuario[1]; // imprimir a casa 1 = nogueira.

    // Concatenando dados em listas / Arrays
    echo "<br><br>";
    $dadosUsuario2 = ['Nome' => 'Alleph', 'Sobrenome' => 'Nogueira', 'Filhos' => 'Crixus&Amora'];
    echo $dadosUsuario2['Sobrenome']. " ". $dadosUsuario2['Filhos'];



    // Exercicio de concatenação

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Crirar uma variavel com saudação (Senhor, Senhora, Doutor...)

        $saudacao = "Senhor";
        $saudacao2 = "Seja bem vindo";

    // Criar uma variavel com nome e outra sobrenome;

        $nome = "Alleph";
        $sobrenome = "Nogueira";
    // Imprimir com o echo a concatenação de saudação, nome e sobrenome;

        echo $saudacao. " ". $nome. " ". $sobrenome. " ". $saudacao2; 

?>