<h1>Vamos fazer o calculo da nossa idade</h1>

<h3>Vamos fazer o calculo da idade, para descobrir se você pode alugar o filme</h3>

<h1> Sua idade atual é:
<?php

    $nascimento = 1994;

    $idade = date('Y') - $nascimento;
    
    echo $idade;

    include __DIR__ ."/../Require.php"; // voltando uma pasta.
    include __DIR__ ."/../conf.php";  // voltando uma pasta

    ?></h1>


<h1>Teste para informar que voltamos 1 pasta.</h1>

