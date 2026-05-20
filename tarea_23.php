<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precio_base = floatval($_POST['precio']);
    $porcentaje_iva = 0.13; // 13% de IVA
    
    $iva = $precio_base * $porcentaje_iva;
    $total_con_iva = $precio_base + $iva;

    echo "<h2>Cálculo de Impuestos (Tarea 23)</h2>";
    echo "Precio base: $" . number_format($precio_base, 2) . "<br>";
    echo "IVA (13%): $" . number_format($iva, 2) . "<br>";
    echo "<h3>Total a pagar (IVA incluido): $" . number_format($total_con_iva, 2) . "</h3>";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
