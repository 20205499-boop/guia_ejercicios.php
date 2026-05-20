<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    echo "<h1>Análisis de Números</h1>";
    echo "<p>Comparando <strong>$n1</strong> y <strong>$n2</strong>:</p>";
    
    if ($n1 > $n2) {
        echo "<h2 style='color:#20c997;'>El número mayor es: $n1</h2>";
    } elseif ($n2 > $n1) {
        echo "<h2 style='color:#20c997;'>El número mayor es: $n2</h2>";
    } else {
        echo "<h2 style='color:#6c757d;'>Ambos números son iguales ($n1).</h2>";
    }
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>