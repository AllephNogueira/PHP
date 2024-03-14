<?php

function isPrime($numero) {
    // Se o número for menor que 2, não é primo
    if ($numero < 2) {
        return false;
    }

    // Percorre os números de 2 até a raiz quadrada do número fornecido
    for ($i = 2; $i <= sqrt($numero); $i++) { // sqrt é para retornar a raiz quadrada do numero
        // Se o número for divisível por $i, não é primo
        if ($numero % $i === 0) {
            return false;
        }
    }

    // Se nenhum divisor foi encontrado, o número é primo
    return true;
}

// Exemplos de uso da função
echo isPrime(2) ? "2 é primo\n" : "2 não é primo\n";
echo isPrime(3) ? "3 é primo\n" : "3 não é primo\n";
echo isPrime(17) ? "17 é primo\n" : "17 não é primo\n";
echo isPrime(15) ? "15 é primo\n" : "15 não é primo\n";
echo isPrime(20) ? "23 é primo\n" : "23 não é primo\n";

?>
