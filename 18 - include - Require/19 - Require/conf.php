<?php

    function maiorIdade($anoNascimento){
        $calculo = date('Y') - $anoNascimento;

        echo $calculo. "<br>";

    }


    function alugarFilme($nascimento){

        $minhaIdade = null;

        if(date('Y') - $nascimento >= 18){
            echo "Voce pode alugar o filme<br>";

        }else{
            echo "Voce tem apenas ". $minhaIdade = date('Y') - $nascimento. " anos por isso não pode alugar o filme<br>";
        }
    }
    
    function verificarSenha($idUsuario, $senhaUsuario){

        $idServidor = "Alleph";
        $senhaServidor = 123456;

        if ($idUsuario == $idServidor && $senhaUsuario == $senhaServidor){
            echo "Dados aceito<br>";
            echo "Acessando a pagina do servidor";

        }else{
            echo "Dados invalidos";
        }
    }

    ?>
