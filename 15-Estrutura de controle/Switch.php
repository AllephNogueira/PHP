<?php


    $x = 1;


    switch ($x){

        case 0:
            echo "X é igual a 0<br>";
            break; // Serve para quando achar essa condição verdadeira ele nao executar os outros case

        case 1: 

            echo "X é igual a 1<br>";
            break;  // Serve para quando achar essa condição verdadeira ele nao executar os outros case


        default; // Default serve para quando nao entrar em nenhum case ele cair aqui.
            
            echo "Opcão não encontrada";

    }


    //// agora vamos usar para confirmar o sobrenome


    
    $nome = "Livia";

    switch($nome){
        case "Alleph":
            echo "O sobrenome é Nogueira<br>";
            break;
        case "Fernanda":
            echo "O sobrenome é Ferreira<br>";
            break;
        case "Larissa":
            echo "O sobrenome é Nogueira<br>";
            break;
        case "Livia":
            echo "O sobrenome é Ferreira<br>";
            break;

        default:
            echo "Opção não encontrada, digite os dados novamente";
    }