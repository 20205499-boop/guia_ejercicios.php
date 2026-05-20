<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    
    // Sumamos las tres notas y dividimos entre 3
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    
    // round($promedio, 2) sirve para mostrar solo 2 decimales
    echo "<h1>Promedio del Estudiante</h1>";
    echo "<p>Las notas ingresadas son: <strong>$nota1</strong>, <strong>$nota2</strong> y <strong>$nota3</strong></p>";
    echo "<h2>El promedio final es: <span style='color:#007bff;'>" . round($promedio, 2) . "</span></h2>";
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>