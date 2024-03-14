<h1>Testando antes do require</h1><hr>
<p>O Require ele nao aceita os dados que vem apos se faltar o arquivo ele gera erro fatal.</p>
<p>Include ele aceita os arquivos que vem depois.</p><hr>


<?php


    require "conf.php"; // Nesse caso vamos gerar um erro fatal se o arquivo não for encontrado.

    maiorIdade(1994); // Aqui vamos digitar o nosso ano de nascimento e vamos cair na função


    alugarFilme(2008); // funcao para dizer se o usuario pode alugar um filme

    verificarSenha("Alleph",123456); // Aqui foi feito uma funcao para verificar ID e senha DIGITADOS


?>

<hr><p>Testando depois do require</p>
<p>Agora vamos acessar uma outra pasta.</p>


<?php

    require "conf/configuracoes.php"; // Acessando um require dentro de uma pasta.


    ?>