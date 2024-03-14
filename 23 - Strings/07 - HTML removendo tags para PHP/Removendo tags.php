<?php

    $textoHtml = "<p>Testando meu paragrafo</p> <div> Seja bem vindo</div>";

    echo $textoHtml;

    $salvarTexto = strip_tags($textoHtml); // Texto puro


    echo "<br> $salvarTexto";