<?php
// Solicita ao usuário que insira um número
$n = (int) readline("Digite um número inteiro maior que zero: ");

// Verifica se o número é maior que zero (garantido pela premissa do problema)
if ($n > 0) {
    // Loop para imprimir os números de 1 até N
    for ($i = 1; $i <= $n; $i++) {
        echo $i . "\n";
    }
} else {
    echo "O número deve ser maior que zero.";
}
?>