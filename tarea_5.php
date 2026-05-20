<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    
    echo "<h1>Resultado de la División</h1>";
    if ($n2 == 0) {
        echo "<h2 style='color:red;'>Error: No se puede dividir entre cero (0).</h2>";
    } else {
        $resultado = $n1 / $n2;
        echo "<p>El resultado de dividir <strong>$n1</strong> / <strong>$n2</strong> es:</p>";
        echo "<h2 style='color:#6f42c1; font-size:36px;'>$resultado</h2>";
    }
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>