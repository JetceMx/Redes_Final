<!DOCTYPE html>
<html lang="ea">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/principal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Sabinito Search</title>
</head>
<body>
<header>
    <?php
        include '../PHP/header.php'
    ?>
    <section class="textos-header">
        <div id="txtTitle" style="position: absolute;
            top: 200px;
            left: 100px;">
            <h1 style="color: #26798E;">Una forma fácil de conseguir tu nuevo empleo</h1>
            <br>
            <h2 style="color: #26798E;">Esta plataforma permite explorar oportunidades laborales para adecuar la mejor a tu perfil.</h2>
        </div>
        <div id="txtImg">
            <img src="../IMG/computadora.png"  style="width:300px;border: 5px solid #26798E;border-radius:10px;position: absolute;
            top: 150px;
            left: 1100px;" alt="Imagen 1">
            <img src="../IMG/equipo.png"  style="width:300px;border: 5px solid #26798E;border-radius:10px; position: absolute;
            top: 300px;
            left: 900px;" alt="Imagen 1">
        </div>
    </section>
    <div class="wave"  style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-3.16,111.70 C223.70,115.64 272.23,44.78 500.00,49.85 L500.00,149.60 L-7.67,169.77 Z" style="stroke: none; fill: #fff;"></path></svg></div>
</header>
<div class="container">
    <section id="nosotros" class="about-section">
        <h2 style="color: #26798E;text-align: center;font-weight: bold; font-size: 40px;">
            <i class="fa-solid fa-magnifying-glass"></i> 
            Sabinito Search
        </h2>
        <hr>
        <p style="margin-left: 70px; margin-right: 70px; font-size:25px; text-align: justify;">
        Somos una plataforma en línea dinámica creada para conectar de manera efectiva a empleadores y profesionales en busca de oportunidades laborales. En nuestro sitio, las empresas pueden publicar sus vacantes de empleo con facilidad y precisión, mientras que los candidatos tienen la posibilidad de explorar una amplia gama de ofertas laborales que se ajusten a sus habilidades, experiencia y aspiraciones profesionales.</p>
    </section>
    <section>
        <?php
        // Ejemplo de datos de empleo
        $empleos = [
            [
                'titulo' => 'Desarrollador Web',
                'descripcion' => 'Buscamos un desarrollador web con experiencia en PHP, HTML, CSS y JavaScript.',
                'imagen' => '../IMG/icon1.png',
                'enlace' => '../PHP/Chamba.php'
            ],
            [
                'titulo' => 'Diseñador Gráfico',
                'descripcion' => 'Oportunidad para un diseñador gráfico creativo con habilidades en Adobe Creative Suite.',
                'imagen' => '../IMG/icon2.png',
                'enlace' => '../PHP/ChambaDiseño.php'
            ],[
                'titulo' => 'Analista y diseñador de sistemas',
                'descripcion' => 'Buscamos un Analista de sistemas con experiencia en PHP, HTML y base de datos.',
                'imagen' => '../IMG/icon3.png',
                'enlace' => '../PHP/ChambaAnalista.php'
            ],
            // Agrega más empleos según sea necesario
        ];

        // Genera tarjetas para cada empleo
?>

<h4 style="color: #26798E;text-align: center;font-weight: bold; font-size: 30px;margin-top: 80px;">
<i class="fa-solid fa-lightbulb"></i>
            Descubre las ofertas
        </h4>
        <hr>
<div "container-ofertas" style="display:flex; justify-content: space-between;">

<?php
        foreach ($empleos as $empleo) {
            echo '<article class="information [ card ]" style="background-color:#9fd7e594;">';
            echo '<div style="display: flex;">';
            echo '';
            echo '';
            echo '<img src="' . $empleo['imagen'] . '" style="width:80px;" class="card-img-top" alt="' . $empleo['titulo'] . '">';
            echo '<h2 class="title" style="margin-left:20px;font-weight: bolder;">' . $empleo['titulo'] . '</h2>';
            echo '</div>';
            echo '<p class="info" style="margin-top: 10px;">' . $empleo['descripcion'] . '</p>';
            echo '<button class="button" style="background-color:white;" href="' . $empleo['enlace'] . '">Solicitar<i class="fa-solid fa-arrow-right-long"></i>
		</button>
	</article>';
        }
        ?>
        </div>

    </section>

    
    <section class="contenedor sobre-nosotros">
            <h2 class="titulo" style="color: #26798E;text-align: center;font-weight: bolder; font-size: 30px;"><i class="fa-solid fa-address-card"></i>
             Sobre nosotros</h2>
             <hr>
            <div class="contenedor-sobre-nosotros">
                <img src="../IMG/ambientelaboral.png" style="width:550px;" alt="" class="imagen-about-us">
                <div class="contenido-textos" style="text-align:left;">
                    <h3 style="font-size: 20px;"><span>1</span>Misión</h3>
                    <p>Nuestra misión es transformar el proceso de búsqueda de empleo y reclutamiento mediante la creación de una plataforma intuitiva, accesible y eficaz. Nos esforzamos por empoderar a los profesionales y a las empresas, proporcionándoles herramientas y recursos que simplifiquen la conexión entre el talento y las oportunidades laborales, promoviendo el desarrollo profesional y el crecimiento empresarial.</p>
                    <h3 style="font-size: 20px;"><span>2</span>Visión</h3>
                    <p>Nuestra visión es ser la plataforma líder en la intermediación laboral a nivel global, reconocida por nuestra capacidad de innovación, confiabilidad y efectividad. Aspiramos a ser el punto de referencia para todos aquellos que buscan potenciar su carrera profesional o encontrar el talento adecuado para sus organizaciones, contribuyendo a un mercado laboral más eficiente, equitativo y dinámico.</p>
                </div>
            </div>
    </section>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        /*localStorage.setItem('user', "Juan");
        localStorage.setItem('loggedIn', "true");
        localStorage.setItem('tipo', "Empresa");*/
    </script>
    <?php
        include '../PHP/piepagina.php'
    ?>

    

</body>
</html> 