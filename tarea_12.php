<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['base']) && isset($_POST['altura'])) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    
    // Fórmula: Área = base * altura
    $area = $base * $altura;
    
    echo "<h1>Área Calculada</h1>";
    echo "<p>Para un rectángulo de base <strong>$base</strong> y altura <strong>$altura</strong>:</p>";
    echo "<h2>El área total es: <span style='color:#007bff;'>$area</span> u²</h2>";
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>