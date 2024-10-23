<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "casainglis";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="lg12.jpeg" sizes="16x16" type="image/png">
    <title>Formulario</title>
</head>
<body>
    <form action="tu_script.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="tel" name="telefono" placeholder="Teléfono" required>

        <input type="submit" name="registro" value="Registrar">
        <input type="reset" value="Limpiar">
        <a href="inicio.html">Inicio</a>
    </form>
</body>
</html>
