<!--
@Alumno: Ing. Kevin C. Lopez Gonzalez
@Fecha: 20 de Agosto, 2023
@Carrera: Ing. Sistemas Computacionales
@Univeridad: UVEG
@Maestra:Ing. Dora Alicia Álvarez Medina
@Archivo: index.html
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulario de Registro</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Registrar Alumno</h1>
                <form id="registro-form" action="card.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid fixed-bottom text-muted text-center py-2">
        <?php
        echo "Ing. Kevin C. Lopez Gonzalez | Fecha: " . date("d de F, Y") . " | Ing. Sistemas Computacionales | UVEG | Ing. Dora Alicia Álvarez Medina";
        ?>
    </div>

</body>

</html>

