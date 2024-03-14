<?php

    // Operador ternario onde nao precisa utilizar o if e else


    echo 5 > 10 ? "Resposta 1 correta<br>" : "Resposta 1 invalida<br>";


    // 5 e maior que 10 ? Aqui ele vai imprimir 1 resposta ou outra.


    $senha = "123";
    $senhaServidor = "123";
    $usuario = "Alleph";
    $usuarioServidor = "Allephh";


    echo $senha == $senhaServidor ? "Dados 1 confere<br>" : "Dados 1 invalidos<br>";

    // Utilizando com operadores logicos tambem

    echo $senha == $senhaServidor && $usuario == $usuarioServidor ? "Dados 1 confere<br>" : "Dados 1 invalidos<br>"; // Aqui estou forçando a da um verdadeiro e falso para saida == falso

