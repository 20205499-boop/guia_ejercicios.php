<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero_entero'])) {
    $n = $_POST['numero_entero'];
    echo "<h1>Resultado del Análisis</h1>";
    
    
    if ($n % 2 == 0) {
        echo "<h2 style='color:#007bff;'>El número $n es: PAR</h2>";
    } else {
        echo "<h2 style='color:#ffc107;'>El número $n es: IMPAR</h2>";
    }
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>