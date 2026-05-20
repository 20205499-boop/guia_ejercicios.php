<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['celsius'])) {
    $celsius = $_POST['celsius'];
    
    // Fórmula matemática: (°C * 9/5) + 32
    $fahrenheit = ($celsius * 9 / 5) + 32;
    
    echo "<h1>Conversión de Temperatura</h1>";
    echo "<p><strong>$celsius °C</strong> pasados a la escala americana son:</p>";
    echo "<h2 style='color:#fd7e14; font-size:42px;'>" . round($fahrenheit, 1) . " °F</h2>";
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>