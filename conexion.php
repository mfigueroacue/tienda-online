<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "TIENDA");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO PEDIDOS (cliente, producto, cantidad) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $cliente, $producto, $cantidad);

    if ($stmt->execute()) {
        echo "<p>Pedido registrado con éxito.</p>";
    } else {
        echo "<p>Error al registrar el pedido: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
