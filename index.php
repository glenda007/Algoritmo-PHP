<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios en PHP</title>
</head>
<body>
    <h1>Números Primos del 1 al 1000</h1>
    <p>
        <?php
        for ($num = 2; $num <= 1000; $num++) {
            $esPrimo = true;
            for ($i = 2; $i * $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if ($esPrimo) echo "$num ";
        }
        ?>
    </p>
    
    <h1>Algoritmo</h1>
    <pre>
        <?php
        $n = 5;
        for ($j = 1; $j <= $n; $j++) echo str_repeat("*", $j) . "\n";
        echo str_repeat("+", $n + 1) . "\n";
        for ($j = $n; $j >= 1; $j--) echo str_repeat("*", $j) . "\n";
        ?>
    </pre>
</body>
</html>