<!--
@Alumno: Ing. Kevin C. Lopez Gonzalez
@Fecha: 20 de Agosto, 2023
@Carrera: Ing. Sistemas Computacionales
@Univeridad: UVEG
@Maestra:Ing. Dora Alicia Álvarez Medina
@Archivo: card.html
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registro Exitoso</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title">¡Registro Exitoso!</h2>
                        <p class="card-text">El alumno ha sido registrado correctamente.</p>
                        <p><strong>Nombre:</strong> <?php echo $_POST["nombre"]; ?></p>
                        <p><strong>Apellidos:</strong> <?php echo $_POST["apellidos"]; ?></p>
                        <p><strong>Edad:</strong> <?php echo $_POST["edad"]; ?></p>
                        <p><strong>Correo:</strong> <?php echo $_POST["correo"]; ?></p>
                    </div>
                </div>
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
