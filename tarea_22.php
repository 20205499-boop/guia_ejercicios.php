<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dolares = floatval($_POST['dolares']);
    $tasa_cambio = 0.92; // 1 Dólar = 0.92 Euros
    
    $euros = $dolares * $tasa_cambio;

    echo "<h2>Conversión de Moneda (Tarea 22)</h2>";
    echo "Cantidad ingresada: $" . number_format($dolares, 2) . " USD<br>";
    echo "Tasa de cambio aplicada: " . $tasa_cambio . "<br>";
    echo "<h3>Equivale a: €" . number_format($euros, 2) . " EUR</h3>";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
