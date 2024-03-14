<?php
// Função para gerar 6 números aleatórios entre 1 e 60
function gerarNumeros() {
    $numeros = array();
    while (count($numeros) < 6) {
        $numero = rand(1, 60);
        if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
        }
    }
    return $numeros;
}

// Chamada da função para gerar os números
$sorteados = gerarNumeros();

// Imprimir os números sorteados
echo "Números sorteados: ";
foreach ($sorteados as $numero) {
    echo $numero . " ";
}
?>
