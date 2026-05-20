<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura el monto enviado desde tarea17.html
    $monto = floatval($_POST['monto']);
    $limite_descuento = 100; // Condición: la compra debe superar los $100
    $descuento = 0;

    // Estructura condicional para evaluar si aplica el 10% de descuento
    if ($monto > $limite_descuento) {
        $descuento = $monto * 0.10;
    }

    $total_final = $monto - $descuento;

    echo "<h2>Resultado del Cálculo</h2>";
    echo "Monto original: $" . number_format($monto, 2) . "<br>";
    
    if ($descuento > 0) {
        echo "¡Felicidades! Se aplicó un descuento del 10%: -$" . number_format($descuento, 2) . "<br>";
    } else {
        echo "No se aplicó descuento (compras menores o iguales a $" . number_format($limite_descuento, 2) . ").<br>";
    }
    
    echo "<strong>Total a pagar: $" . number_format($total_final, 2) . "</strong>";
} else {
    echo "Acceso no permitido.";
}echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>
