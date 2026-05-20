<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_limite = intval($_POST['numero']);
    $suma_total = 0;

   
    for ($i = 1; $i <= $numero_limite; $i++) {
        $suma_total += $i; // Es lo mismo que: $suma_total = $suma_total + $i;
    }

    echo "<h2>Resultado de la Suma</h2>";
    echo "Número ingresado: <strong>" . $numero_limite . "</strong><br>";
    echo "La suma de todos los números desde 1 hasta " . $numero_limite . " es: <strong>" . $suma_total . "</strong>";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
