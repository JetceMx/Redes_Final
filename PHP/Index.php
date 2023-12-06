<!DOCTYPE html>
<html lang="ea">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            background-color: #fff;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }


        @media only screen and (max-width: 600px) {
    body {
        font-size: 14px;
    }
    .container {
    width: 80%;
    margin: 0 auto; /* Centra el contenedor */
    img {
    max-width: 100%;
    height: auto;
}
}

}
    </style>
    <title>Chamba Search</title>
</head>
<body>
    <?php
        include '../PHP/header.php'
    ?>

<div class="container mt-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <?php
                // Aquí puedes obtener dinámicamente los datos del carrusel desde una base de datos o cualquier otra fuente
                $items = [
                    ['image' => '../IMG/imagen1.jpg', 'caption' => ' '],
                    ['image' => '../IMG/imagen2.jpg', 'caption' => ' '],
                    ['image' => '../IMG/imagen3.jpg', 'caption' => ' '],
                ];

                foreach ($items as $Index => $item) {
                    $activeClass = ($Index == 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="../IMG/' . $item['image'] . '" class="d-block w-100" alt="Slide ' . ($Index + 1) . '">';
                    echo '<div class="carousel-caption d-none d-md-block">';
                    echo '<h5>' . $item['caption'] . '</h5>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </div>

            <!-- Controles de navegación -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <br>
    <br>
    
    <br>
    <br>

    <section>
        <?php
        // Ejemplo de datos de empleo
        $empleos = [
            [
                'titulo' => 'Desarrollador Web',
                'descripcion' => 'Buscamos un desarrollador web con experiencia en PHP, HTML, CSS y JavaScript.',
                'imagen' => '../IMG/icon1.png',
                'enlace' => '#'
            ],
            [
                'titulo' => 'Diseñador Gráfico',
                'descripcion' => 'Oportunidad para un diseñador gráfico creativo con habilidades en Adobe Creative Suite.',
                'imagen' => '../IMG/icon2.png',
                'enlace' => '#'
            ],[
                'titulo' => 'Analista y diseñador de sistemas',
                'descripcion' => 'Buscamos un Analista de sistemas con experiencia en PHP, HTML y base de datos.',
                'imagen' => '../IMG/icon3.png',
                'enlace' => '#'
            ],
            // Agrega más empleos según sea necesario
        ];

        // Genera tarjetas para cada empleo
        foreach ($empleos as $empleo) {
            echo '<div class="card">';
            echo '<img src="' . $empleo['imagen'] . '" alt="' . $empleo['titulo'] . '">';
            echo '<h3>' . $empleo['titulo'] . '</h3>';
            echo '<p>' . $empleo['descripcion'] . '</p>';
            echo '<a href="' . $empleo['enlace'] . '">Solicitar</a>';
            echo '</div>';
        }
        ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
        include '../PHP/piepagina.php'
    ?>

    
</body>
</html> 