<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    echo "<h2>Tabla de multiplicar del " . $numero . "</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    
   
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>" . $numero . " x " . $i . "</td>";
        echo "<td>=</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else 
    echo "Acceso no permitido.";
?>"<br><hr><br><a href='index.php'>← Volver al Menú Principal</a></div></body></html>";
