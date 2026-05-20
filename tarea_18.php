<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = htmlspecialchars($_POST['cliente']);
    $producto = htmlspecialchars($_POST['producto']);
    $cantidad = intval($_POST['cantidad']);
    $precio = floatval($_POST['precio']);

    $total = $subtotal; 

    echo "<h2>--- FACTURA DE COMPRA ---</h2>";
    echo "<strong>Cliente:</strong> " . $cliente . "<br>";
    echo "---------------------------------------<br>";
    echo "<strong>Producto:</strong> " . $producto . "<br>";
    echo "<strong>Cantidad:</strong> " . $cantidad . "<br>";
    echo "<strong>Precio Unitario:</strong> $" . number_format($precio, 2) . "<br>";
    echo "---------------------------------------<br>";
    echo "<strong>Subtotal:</strong> $" . number_format($subtotal, 2) . "<br>";
    echo "<h3>Total a Pagar: $" . number_format($total, 2) . "</h3>";
} else {
    echo "Acceso no permitido.";
}
?>