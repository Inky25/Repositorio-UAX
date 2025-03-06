<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center text-primary">Conexión con Base de Datos Exitosa</h1>
            <p class="text-center">Inserción de Datos:</p>
            <div class="alert alert-info" role="alert">
                <?php
                require("conexion.php");
                $nombre = $_POST['Nombre'];
                $Apellido = $_POST['Apellido'];
                $correo = $_POST['Correo'];
                $telefono = $_POST['Telefono'];
                $sql = "INSERT INTO alumnos1 (nombre, Apellido, correo, telefono) VALUES ('".$nombre."', '".$Apellido."', '".$correo."', ".$telefono.")";
                
                if ($connection->query($sql) === TRUE) {
                    echo "<p class='text-success fw-bold'>Inserción del alumno <strong>$nombre</strong> correcta.</p>";
                } else {
                    echo "<p class='text-danger fw-bold'>Fallo en la inserción.</p>";
                }
                $connection->close();
                ?>
            </div>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>
    </div>
</body>
</html>
