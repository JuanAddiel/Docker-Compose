<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
    <h1>Hola Mundo PHP</h1>

    <?php
    // Conexión a la base de datos
    $mysqli = new mysqli("mariadb", "miapp", "2003", "miapp");

    // Verificar la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    echo "<p>Conexión a la base de datos exitosa.</p>";

    // Realizar una consulta
    $result = $mysqli->query("SELECT '¡Hola Mundo desde la base de datos!' AS message");

    if ($result) {
        $row = $result->fetch_assoc();
        echo "<p>Respuesta de la base de datos: " . $row["message"] . "</p>";
        $result->close();
    } else {
        echo "Error en la consulta: " . $mysqli->error;
    }

    // Cerrar la conexión
    $mysqli->close();
    ?>

</body>
</html>
