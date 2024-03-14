<?php
function sumDigits($numero) {
    // Converte o número para uma string para poder iterar sobre seus dígitos
    $numeroString = (string)$numero;
    
    // Inicializa a variável para armazenar a soma dos dígitos
    $soma = 0;
    
    // Percorre cada dígito da string e adiciona ao total
    for ($i = 0; $i < strlen($numeroString); $i++) {
        // Converte o caractere do dígito de volta para um número e adiciona à soma
        $soma += (int)$numeroString[$i];
    }
    
    // Retorna a soma dos dígitos
    return $soma;
}

// Exemplo de uso da função
$numero = 21;
echo "A soma dos dígitos de $numero é: " . sumDigits($numero);
?>
