<?php
echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title>";
echo "<style>body{font-family:Arial;margin:40px;background-color:#e9ecef;text-align:center;}.resultado{background:white;padding:30px;display:inline-block;border-radius:8px;box-shadow:0 4px 6px rgba(0,0,0,0.1);}a{text-decoration:none;color:#007bff;font-weight:bold;}</style></head><body><div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['metros'])) {
    $metros = $_POST['metros'];
    
    // 1 metro tiene 100 centímetros
    $centimetros = $metros * 100;
    
    echo "<h1>Resultado de la Conversión</h1>";
    echo "<h2><strong>$metros</strong> metros equivalen a:</h2>";
    echo "<h1 style='color:#17a2b8; font-size:42px;'>$centimetros cm</h1>";
} else {
    echo "<h1 style='color:red;'>¡Alerta!</h1><p>Debes usar el formulario primero.</p>";
}
echo "<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
?>