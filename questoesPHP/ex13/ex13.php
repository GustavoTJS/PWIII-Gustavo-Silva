<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["numero"]); }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["numero"]); 
        if ($n > 0) {
            echo "<h2>Tábuada do $n:</h2>";
        for ($i = 1; $i <= 10; $i++){ 
         $result = $n * $i;
         echo "$n x $i = $result \n";
        }
    }
}
?>
