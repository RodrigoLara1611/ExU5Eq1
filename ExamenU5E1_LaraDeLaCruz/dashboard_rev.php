<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Revisor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-color: #ffffff;
        /* Cambia el color de fondo del cuerpo según tus preferencias */
    }

    .container {
        text-align: center;
        margin-top: 50px;

    }

    .nav {
        text-align: center;
        margin-top: 50px;
        background-color: #000040;
    }

    h2 {
        color: white;
        /* Cambia el color del texto a azul */
        font-family: 'Georgia', serif;
        text-align: center;
        font-size: 54px;
    }

    .container,
    .modal-content {
        text-align: center;
        /* Centra el contenido horizontalmente */
        margin-top: 5px;
        /* Ajusta la distancia desde la parte superior según tus preferencias */
    }

    .table {
        width: 90%;
        margin: 10px auto;
    }

    .table th,
    .table td {
        text-align: center;

    }

    .table thead {
        background-color: #ffffff !important;
        color: white;
        /* Cambia el color del texto del encabezado a blanco */
    }


    .table tbody tr:nth-child() {
        background-color: #804000;
    }

    /* Agrega estilos CSS aquí */
    form {
        margin-top: 20px;
        /* Ajusta el margen superior del formulario según sea necesario */
        margin-right: 20px;
        /* Ajusta el margen derecho del formulario según sea necesario */
        text-align: left;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        /* Color de fondo */
        color: white;
        /* Color del texto */
        padding: 10px 20px;
        /* Espaciado interno */
        font-size: 16px;
        /* Tamaño de fuente */
        border: none;
        /* Sin borde */
        cursor: pointer;
        /* Cursor al pasar sobre el botón */
    }

    /* Cambia el color del botón cuando se pasa el ratón sobre él */
    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .conte {
        text-align: center;
        margin-top: 50px;
        background-color: #315F31;

    }

    .navbar {
        background-color: #262726;
        /* Establece el fondo en el azul deseado */
    }

    .navbar-text {
        color: white;
        font-family: 'Georgia', serif;
        font-size: 40px;
    }

    .navbar-usu {
        color: white;
        font-family: 'Georgia', serif;
        font-size: 15px;
    }

    video {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translateX(-50%) translateY(-50%);
        z-index: -1;
    }
</style>

<body>

    <?php
    include 'database.php';
    $database = new Database();
    $datosRev = $database->obtenerNombreRev();
    $nombreRev = $datosRev['Nombres'];
    $gradoRev = $database->obtenerGradoRev();
    $grado = $gradoRev['Grado_Academico'];
    ?>

    <video autoplay loop muted>
        <source src="/mp4/storm.mp4" type="video/mp4">

    </video>

    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Zorro.png" alt="Logo" height="150">
            </a>
            <span class="navbar-text">
                Programación Web
            </span>
            <div class="ml-auto">
                <span class="navbar-usu">Bienvenido, <?php echo $grado . ' ' . $nombreRev; ?></span>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <div class="container">
        <div class="conte">
            <h2> Proyectos Asignados</h2>
        </div>
    </div>

    <div class="container">

        <table class="table table-dark mt-3">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Temática</th>
                    <th>Ver Documento</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'proyectos.php';

                $proyectos = getProyectos();
                foreach ($proyectos as $proyecto) {
                    echo "<tr>";
                    echo "<td>{$proyecto['Titulo']}</td>";
                    echo "<td>{$proyecto['Tematica']}</td>";
                    echo "<td><a href='ver_proyecto.php?titulo={$proyecto['Titulo']}&autor={$proyecto['Autor']}&archivo={$proyecto['Archivo']}'><img src='img/ojo.png' alt='Detalles' width='40' height='auto'></a></td>";
                    echo "</tr>";
                } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>