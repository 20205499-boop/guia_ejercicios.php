<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['empleado']) && isset($_POST['horas']) && isset($_POST['pago_hora'])) {
    $empleado = $_POST['empleado'];
    $horas = $_POST['horas'];
    $pago_hora = $_POST['pago_hora'];
    $salario_total = $horas * $pago_hora;
    
    echo "<h1>Cálculo de Sueldo</h1>";
    echo "<p>Empleado: <strong>" . htmlspecialchars($empleado) . "</strong></p>";
    echo "<p>Horas reportadas: <strong>$horas</strong> a un ritmo de <strong>$$pago_hora</strong> por hora.</p>";
    echo "<h2>Salario Total Bruto: <span style='color:#6f42c1;'>$" . number_format($salario_total, 2) . "</span></h2>";
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>