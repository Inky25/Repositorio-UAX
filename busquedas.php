<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center text-primary">Tabla Alumnos</h1>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("conexion.php");
                    $sql="SELECT * FROM alumnos1";
                    $resultadoAl=$connection->query($sql);
                    
                    if($resultadoAl->num_rows>0){
                        while ($fila = $resultadoAl -> fetch_assoc()){
                            echo "
                            <tr>
                                <td>".$fila["nombre"]."</td>
                                <td>".$fila["apellido"]."</td>
                                <td>".$fila["correo"]."</td>
                                <td>".$fila["telefono"]."</td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="card shadow p-4 mt-4">
            <h1 class="text-center text-primary">Tabla Profesores</h1>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql="SELECT * FROM profesores";
                    $resultadoAl=$connection->query($sql);
                    
                    if($resultadoAl->num_rows>0){
                        while ($fila = $resultadoAl -> fetch_assoc()){
                            echo "
                            <tr>
                                <td>".$fila["nombre"]."</td>
                                <td>".$fila["apellido"]."</td>
                                <td>".$fila["correo"]."</td>
                                <td>".$fila["especialidad"]."</td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
