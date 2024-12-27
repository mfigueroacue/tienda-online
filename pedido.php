<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Pedido</title>
</head>
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
        $cliente = htmlspecialchars($_POST['cliente']);
        $producto = htmlspecialchars($_POST['producto']);
        $cantidad = (int) $_POST['cantidad'];

        echo "<h2>Resumen del Pedido:</h2>";
        echo "<p><strong>Cliente:</strong> $cliente</p>";
        echo "<p><strong>Producto:</strong> $producto</p>";
        echo "<p><strong>Cantidad:</strong> $cantidad</p>";
    }
    ?>
</body>
</html>
