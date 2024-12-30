<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Pedido</title>
</head>
<link rel="stylesheet" src="style.css">
<body>
    <h1>Gestión de Pedido</h1>

    <!-- Formulario para ingresar el pedido -->
    <form method="POST" action="">
        <label for="cliente">Nombre del Cliente:</label>
        <input type="text" id="cliente" name="cliente" required><br><br>

        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>

        <input type="submit" value="Registrar Pedido">
    </form>

    <hr>

    <!-- Procesar y mostrar los datos ingresados -->
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $cliente = trim($_POST['cliente']);
    $producto = trim($_POST['producto']);
    $cantidad = (int) $_POST['cantidad'];

    if (empty($cliente)) $errors[] = "El nombre del cliente es obligatorio.";
    if (empty($producto)) $errors[] = "El nombre del producto es obligatorio.";
    if ($cantidad <= 0) $errors[] = "La cantidad debe ser mayor a cero.";

    if (count($errors) > 0) {
        echo "<h2>Errores:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Resumen del Pedido:</h2>";
        echo "<p><strong>Cliente:</strong> $cliente</p>";
        echo "<p><strong>Producto:</strong> $producto</p>";
        echo "<p><strong>Cantidad:</strong> $cantidad</p>";
    }
}
?>
</body>
</html>