<?php
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <title>Resultado de la Resta</title>";
echo "    <style>";
echo "        body { font-family: Arial, sans-serif; margin: 40px; background-color: #e9ecef; text-align: center; }";
echo "        .resultado { background: white; padding: 30px; display: inline-block; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }";
echo "        a { text-decoration: none; color: #007bff; font-weight: bold; }";
echo "    </style>";
echo "</head>";
echo "<body>";
echo "    <div class='resultado'>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    
    
    $resta = $n1 - $n2;
    
    echo "        <h1>Resultado de la Resta</h1>";
    echo "        <p>Al restar <strong>" . $n1 . "</strong> menos <strong>" . $n2 . "</strong>, el total es:</p>";
    echo "        <h2 style='color: #dc3545; font-size: 36px;'>" . $resta . "</h2>";

} else {
    echo "        <h1 style='color: red;'>¡Alerta!</h1>";
    echo "        <p>Debes ingresar los números desde el formulario primero.</p>";
}

echo "        <br><hr><br>";
echo "        <a href='index.php'>← Volver al Menú Principal</a>";
echo "    </div>";
echo "</body>";
echo "</html>";
?>