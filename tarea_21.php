<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = $_POST['palabra'];
    
    $cantidad_letras = mb_strlen($palabra, 'UTF-8');

    echo "<h2>Resultado (Tarea 21)</h2>";
    echo "La palabra ingresada es: <strong>" . htmlspecialchars($palabra) . "</strong><br>";
    echo "Contiene un total de: <strong>" . $cantidad_letras . " letras</strong>.";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
