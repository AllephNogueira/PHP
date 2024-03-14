<?php

    // Aqui vamos pegar todos os dados do usuario

    function Cadastro($nome, $idade, $cep, $cpf){

        echo "Obrigado por se cadastrar $nome<br>";
        echo "Confira seus dados<br>";

        echo "$nome, idade: $idade, CEP: $cep, CPF: $cpf<br>";
        
    }


    $nome = "Alleph";
    $idade = 29;
    $cep = "24465-760";
    $cpf = "15679025701";

    Cadastro($nome, $idade, $cep, $cpf);