<?php

    $url = "https://www.google.com.br/";

    $arrURL = parse_url($url);

    print_r($arrURL);
    echo "<br>";

    // Agora vamos dividir isso por dados

    echo $arrURL["host"]. "<br>"; // Aqui estou exibindo o host
    echo $arrURL["scheme"]. "<br>"; // Aqui estou exibindo o schema

//////////////////////////////////////////////////////////////////////////////////////////////

    // Vamos fazer em mais um site

    $url2 = "https://www.horadecodar.com.br/usuarios/allephnogueira?id=12&nome=Alleph";
    $arrURL2 = parse_url($url2);

    print_r($arrURL2);
    echo "<br><br><br>";

    echo $arrURL2["scheme"]."<br>";
    echo $arrURL2["host"]."<br>"; // Exeibir o host.
    echo $arrURL2["path"]."<br>";
    echo $arrURL2["query"]."<br>";