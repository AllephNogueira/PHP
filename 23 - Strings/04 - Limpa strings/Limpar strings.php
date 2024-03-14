<?php
    // Comandos para limpar string

    $string = "       Alleph Nogueira de Oliveira      .";

    $stringLimpa = trim($string); // Outra forma de fazer é assim tambem

    
    echo $string."<br>\n"; // echo sem comando para testes

    echo trim($string)."<br>\n"; // TRIM - limpa espaços antes e depois da string

    

    echo ltrim($string)."<br>\n"; // LTRIM - Limpa espaços da parte inicial da string

    

    echo rtrim($string)."<br>\n"; // RTRIM - Limpa espaços da parte final da string


    // Lembrar de usar esse comando no depurador porque no navegador nao veremos detalhes.
    // Sempre lembrar de limpar os espaços antes de salvar no banco de dados.
