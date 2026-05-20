<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars evita problemas de seguridad si escriben etiquetas HTML en los inputs
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $ciudad = htmlspecialchars($_POST['ciudad']);

    echo "<h2>Datos Recibidos (Tarea 25)</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td><strong>Nombre:</strong></td><td>" . $nombre . "</td></tr>";
    echo "<tr><td><strong>Correo Electrónico:</strong></td><td>" . $correo . "</td></tr>";
    echo "<tr><td><strong>Ciudad:</strong></td><td>" . $ciudad . "</td></tr>";
    echo "</table>";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";