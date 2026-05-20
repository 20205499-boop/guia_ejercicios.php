<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    $promedio_final = round($promedio, 2);
    
    echo "<h1>Estado Académico</h1>";
    echo "<p>Tu promedio es de: <strong>$promedio_final</strong></p>";
    
    // Suponiendo que en El Salvador aprueban con nota mayor o igual a 6.0
    if ($promedio_final >= 6.0) {
        echo "<h2 style='color:#28a745; background-color:#d4edda; padding:10px; border-radius:5px;'>✔ ¡APROBADO! Felicidades.</h2>";
    } else {
        echo "<h2 style='color:#dc3545; background-color:#f8d7da; padding:10px; border-radius:5px;'>❌ REPROBADO. Sigue intentando.</h2>";
    }
    
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>