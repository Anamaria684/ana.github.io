<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "casainglis";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
    $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
    $telefono = mysqli_real_escape_string($enlace, $_POST['telefono']);
    $contraseña = mysqli_real_escape_string($enlace, $_POST['contraseña']);

    // Hash de la contraseña para seguridad
    $clave_hash = password_hash($clave, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, contraseña) VALUES ('$nombre', '$correo', '$telefono', '$contraseña')";
    
    if (mysqli_query($enlace, $sql)) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="lg12.jpeg" sizes="16x16" type="image/png">
    <title>Formulario de Registro</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="tel" name="telefono" placeholder="Teléfono" required>
        <input type="password" name="clave" placeholder="Contraseña" required>

        <input type="submit" name="registro" value="Registrar">
        <input type="reset" value="Limpiar">
        <a href="inicio.html">Inicio</a>
    </form>
</body>
</html>
