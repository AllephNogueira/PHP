<?php

    $arr = [
        'nome' => 'Alleph',
        'sobrenome' => 'Nogueira',
        'idade'  => 30,
        'cpf'  => '15679025701',
        'adulto'  => true,
    ];

    // Chave que estamos procurando

    $chaveProcurada = "idade";

    // Verificar se uma chave existe


    if(array_key_exists($chaveProcurada, $arr)){//  "nome da chave", $arr
                        
        echo "Chave existente => ".$chaveProcurada. "\n";

    }else{
        echo "Chave nao existe => ".$chaveProcurada. "\n";
    }

    // Outra maneira de procurar a chave é

    if(isset($arr['nome'])) {
        echo "A chave existe". "\n";
    }else {
        echo "Chave nao existete.". "\n";
    }

