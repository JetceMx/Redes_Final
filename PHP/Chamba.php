<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        /* Estilos básicos para la tabla */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
        include '../PHP/headerUsr.php'
    ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link href="https://serpapi.com/search.html?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883" rel="stylesheet">
<link href="https://serpapi.com/search.json?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883" rel="stylesheet">
<link rel="stylesheet" href="../CSS/loginusr.css">


<?php
/*

$url = 'https://serpapi.com/search.json?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883';

require 'path/to/google-search-results.php';
require 'path/to/restclient.php';

$query = [
 "engine" => "google_jobs",
 "google_domain" => "google.com.mx",
 "q" => "Desarrollador",
 "gl" => "mx",
 "hl" => "es",
 "location" => "Mexico"
];

$search = new GoogleSearch('7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883');
$result = $search->get_json($query);

*/

$url = 'https://serpapi.com/search.json?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883';
$json = file_get_contents($url);
$datos = json_decode($json,true);

$nombre = $datos["jobs_results"][0]["title"];
$compania = $datos["jobs_results"][0]["company_name"];
$locacion = $datos["jobs_results"][0]["location"];
$via = $datos["jobs_results"][0]["via"];
$info = $datos["jobs_results"][0]["description"];
$link = $datos["jobs_results"][0]["related_links"][0]["link"];


?>

<div class="container mt-5">
        <h2 class="mb-4">Tabla de Datos desde JSON con Bootstrap</h2>

        <?php
        $url = 'https://serpapi.com/search.json?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883';
        $json = file_get_contents($url);
        $datos = json_decode($json,true);
        $dato = 0;

        if ($datos !== null) {

            /*
            echo '<table class="table">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th scope="col">Nombre</th>';
            echo '<th scope="col">Edad</th>';
            echo '<th scope="col">Trabajo</th>';
            echo '<th scope="col">Trabajo</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][0]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][0]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][0]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][0]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][1]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][1]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][1]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][1]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][2]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][2]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][2]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][2]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][3]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][3]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][3]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][3]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][4]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][4]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][4]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][4]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][5]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][5]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][5]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][5]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][6]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][6]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][6]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][6]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][7]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][7]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][7]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][7]["via"];  '</td>';
                echo '</tr>';
            

            echo '</tbody>';
            echo '</table>';
*/
            echo '<div>';
            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/ids.png" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][0]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][0]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][0]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][0]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][0]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';


            echo '<br>';


            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/AXA.png" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][1]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][1]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][1]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][1]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][1]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';


            echo '<br>';


            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/bluetab.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][2]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][2]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][2]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][2]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][2]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';


            echo '<br>';


            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/TR.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][3]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][3]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][3]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][3]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][3]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';

            
            echo '<br>';


            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/Gice.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][4]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][4]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][4]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][4]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][4]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';

            
            echo '<br>';


            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="../IMG/Quality.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> La Chamba es: <br> ' .$nombre = $datos["jobs_results"][5]["title"] .'</h5>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"> La empresa es: <br> ' .$compania = $datos["jobs_results"][5]["company_name"] .'</li>';
            echo '<li class="list-group-item"> El lugar es en: <br> ' .$locacion = $datos["jobs_results"][5]["location"] .'</li>';
            echo '<li class="list-group-item"> La busqueda es: <br> ' .$via = $datos["jobs_results"][5]["via"] . '</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo '<a href="'.$link = $datos["jobs_results"][5]["related_links"][0]["link"].'" class="card-link">Link</a>';
            echo '</div>';
            echo '</div>';


            echo '</div>';


        } else {
            echo '<p>Error al decodificar el JSON.</p>';
        }
        ?>
    </div>

    <!-- Incluir Bootstrap JS y jQuery desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>
