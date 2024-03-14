<?php

    // Vamos verificar se um usuario é maior de idade
    // Funcao date('y') = imprimir apenas o 24
    // Funcao date('Y') = imprimir o 2024


    $idade = 1994;
    $anoAtual = date('Y');

    $msgMenor = "Voce é menor de idade";
    $idadeMenor = 2007;

    echo "Voce nasceu em $idade <br>";
    echo "Hoje estamos em ". $anoAtual. "<br>";

    if ($anoAtual - $idade >= 18){
        echo "Voce esta aprovado e pode acessar nosso site<br>";
        echo "Voce tem ". $anoAtual - $idade. " anos.";
    }


    // Insirir um else para pesssoas menores de idade
    echo "<br><br><br> Teste do USUARIO 2";

    if ($anoAtual - $idadeMenor >= 18){
        echo "Voce esta aprovado e pode acessar nosso site<br>";
        echo "Voce tem ". $anoAtual - $idade. " anos.<br>";
    }else{
        echo "<br>".$msgMenor. "voce tem ". $anoAtual - $idadeMenor;
    }