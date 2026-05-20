<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad_actual = intval($_POST['edad']);
    $edad_futura = $edad_actual + 10;

    echo "<h2>Cálculo de Edad (Tarea 24)</h2>";
    echo "Tu edad actual es: " . $edad_actual . " años.<br>";
    echo "<h3>Dentro de 10 años tendrás: " . $edad_futura . " años.</h3>";
} else {
    echo "Acceso no permitido.";
}?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";