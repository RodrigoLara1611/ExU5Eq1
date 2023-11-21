<?php
if (isset($_GET['titulo']) && isset($_GET['autor']) && isset($_GET['archivo'])) {
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $archivo = $_GET['archivo'];
} else {
    header('Location: dashboard_rev.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles del Proyecto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #45a049;
            font-size: 36px;
        }

        h3 {
            color: white;
            font-size: 24px;
        }

        iframe {
            width: 80%;
            height: 500px;
            margin: 20px auto;
            display: block;
            border: 1px solid #262726;
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
</head>

<body>
    <video autoplay loop muted>
        <source src="/mp4/storm.mp4" type="video/mp4">

    </video>

    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        <h3>Autor: <?php echo $autor; ?></h3>
        <iframe src="<?php echo '/proyectos/' . $archivo; ?>"></iframe>
    </div>
</body>

</html>