<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_usuario'];
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <title>Respuesta Ejercicio 1</title>";
    echo "    <style>";
    echo "        body { font-family: Arial, sans-serif; margin: 40px; background-color: #e9ecef; text-align: center; }";
    echo "        .resultado { background: white; padding: 30px; display: inline-block; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }";
    echo "        a { text-decoration: none; color: #007bff; font-weight: bold; }";
    echo "    </style>";
    echo "</head>";
    echo "<body>";
    
    echo "    <div class='resultado'>";
    echo "        <h1>¡Bienvenido/a al sistema, " . htmlspecialchars($nombre) . "!</h1>";
    echo "        <p>Tu primer archivo PHP se ha ejecutado correctamente recibiendo los datos mediante POST.</p>";
    echo "        <br><hr><br>";
    echo "        <a href='index.php'>← Volver al Menú Principal</a>";
    echo "    </div>";
    
    echo "</body>";
    echo "</html>";
}
?>