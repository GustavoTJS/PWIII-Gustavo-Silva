<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["numero"]); 

    if ($n > 0) {
        echo "<h2>Números de 1 até $n:</h2>";
        for ($i = 1; $i <= $n; $i++) {
            echo "$i ";
        }
    } else {
        echo "<p>Por favor, insira um número maior que 0.</p>";
    }
} else {
    echo "<p>Acesso inválido!</p>";
}
?>