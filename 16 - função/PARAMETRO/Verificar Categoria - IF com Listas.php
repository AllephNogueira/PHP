<?php

    // Funcao simples para fazer um calculo


    function Calculo ($parametro1, $parametro2){
        echo "teste<br>";


        echo $parametro1 + $parametro2;

    }

    $buscar = 15;
    $buscar2 = 15;
    Calculo($buscar, $buscar2);





    // Escrever uma funcao que verifica a entrada do dado

    function VerificarCategoria ($verificar){
        
        switch($verificar){
            case 1:
                echo "Você esta na categoria de eletronicos";
                break;
            
            case 2:
                echo "Você esta na categoria de vestuario";
                break;

            case 3:
                echo "Você esta na categoria de alimentos";
                break;

            default:
                echo "Categoria não localizada";
        }
    }


    echo "<br><br>________________________________________________________________________________________________";
    echo "<br><br>Você deve digitar os 3 primeiros codigos que esta na sua etiqueta para verificar<br>";

    $categoria = 3;

    VerificarCategoria($categoria);
    



    // Agora vamos fazer usando o IF para verificar a categoria


    echo "<br><br>________________________________________________________________________________________________";
    echo "<br><br>Você deve digitar o nome do alimento<br>";


    function Verificar($verificar2){


        
        // Precisamos pegar a informacao que o usuario digita e transformar tudo em letras minusculas

        $opcaoMinusculo = strtolower($verificar2); // Transformando tudo que chega em minusculo

        // Fazendo uma lista de eletronicos para o usuario poder entrar dentro dela e pesquisar um objeto

        $eletronicos = ["Celular", "Maquina de Lavar", "freezer", "Ar condicionado"];

        // A Ele vai acessar o Opcaomisculo e acessar o eletronicos se tiver dentro de eletronicos ele retorna um true
        if (  in_array(strtolower($opcaoMinusculo), array_map('strtolower', $eletronicos))     ){
            echo "Você esta na categoria de eletronicos";


        }else if($opcaoMinusculo == "vestuario" || $opcaoMinusculo == "camisa"){
            echo "Voce esta na categoria de vestuario";


        }else if($opcaoMinusculo == "alimentos"){
            echo "Voce esta na categoria de alimentos";


        }else{
            echo "Categoria nao localizada, digite os dados novamente";
        }
    }

    $opcao = "freezer";

    Verificar($opcao);




    // Agora vamos fazer uma funcao para verificar se o carro esta disponivel em estoque


    function carroDisponivel($Pesquisa){
        echo "<br><br><br><br><br>---------------------------------------------------------------<br><br>";
        echo "Voce deve digitar a placa do carro para verificar se ele esta disponivel no sistema<br><br>";

        $lista = ["PPN6B11", "KYQ4152", "OYJ8C61"];






        // Aqui vamos fazer o Pesquisa ser transformado em minusculo
        // Aqui vamos fazer o Lista passar para minusculo
        // Depois vamos comparar se Pesquisa esta dentro da Lista

        if ( in_array(strtolower($Pesquisa), array_map('strtolower', $lista))   ){
            echo "Seu veiculo foi encontrado com sucesso!";
        }else{
            echo "Veiculo não encontrado";
        }




    }


    $buscar = "PPN6b21";   // Usuario digita o dado que ele quer procurar.

    carroDisponivel($buscar);


    // Agora vamos fazer uma funcao para procurar jogadores disponivel e jogadores eliminados
    echo "<br><br><br><br><br>-----------------------------------------------<br><br><br><br><br><br>";

    function Jogadores($opcao, $opcaoParticipante){
        echo "Vamos procurar qual tipo de jogadores?<br><br>";

        $jogadores = ["Davi", "Isabele", "Rodriguinho", "Bia"];
        $derrotados = ["Maycon", "Marcelo", "Ricardo"];



        if (strtolower($opcao) == "ativo" || strtolower($opcao) == "ativos" || $opcao == 1){
            echo "Certo, vamos te passar a lista de jogadores disponiveis<br><br>";

            print_r($jogadores);

            echo "<br><br><br>";
        }else if (strtolower($opcao) == "eliminado" || strtolower($opcao) == "eliminados" || $opcao == 0){
            echo "Aqui esta a lista de jogadores eliminados<br><br>";

            print_r($derrotados);

            echo "<br><br><br>";
        }else{
            echo "Digite as opções validas<br>";
        }


        // Agora vamos digitar o nome do participante e vamos descobrir de onde ele é

        switch(strtolower($opcaoParticipante)){ // Pegando tudo que esta dentro da Opcao e transformando em minusculo
            case "davi":
                echo "Jogador morador de Salvador";
                break;
            case "isabela":
                echo "Jogador morador de Amazonas";
                break;
            default:
            echo "Jogador não encontrado";
        }
        

        
    }
        // Digite Ativos ou Eliminados ou
        // Digite 1 para jogadores ativos - 0 Para jogadores eliminados
    $opcao = 2;
    

    $participante = "Davi";
    Jogadores($opcao, $participante);





    // Funcao para retornar verdadeiro ou falso
    echo "<br><br><br><br><br><br><br><br><br>";

    function Testeverdade(){
        echo 5 > 2;

        $teste = 5 > 2;



        if ($teste == 1 ){
            echo "O seu resultado é verdadeiro<br>";
            echo "Aqui é onde vamos começar a escrever o nosso novo codigo.<br>";

        }else {
            echo "O seu resultado é falso<br>";
        }

    }


    Testeverdade();