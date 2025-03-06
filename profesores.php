<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center text-primary">Inserta los datos del profesor</h1>
            <form action="./insprofesores.php" method="POST" class="mt-3">
                <div class="mb-3">
                    <input type="text" placeholder="Nombre" class="form-control" name="Nombre" required />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Apellido" class="form-control" name="Apellido" required />
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Correo" class="form-control" name="Correo" required />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Especialidad" class="form-control" name="Especialidad" required />
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
