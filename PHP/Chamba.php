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
?>

<div class="container mt-5">
        <h2 class="mb-4">Tabla de Datos desde JSON con Bootstrap</h2>

        <?php
        $url = 'https://serpapi.com/search.json?engine=google_jobs&q=Desarrollador&location=Mexico&google_domain=google.com.mx&gl=mx&hl=es&api_key=7585e535ff6150e5560c96925641c5cad34eae29718a8ce7b357affd735a7883';
        $json = file_get_contents($url);
        $datos = json_decode($json,true);

        if ($datos !== null) {
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

            foreach ($datos as $dato) {
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][0]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][0]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][0]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][0]["via"];  '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $nombre = $datos["jobs_results"][0]["title"];  '</td>';
                echo '<td>' . $compania = $datos["jobs_results"][0]["company_name"];  '</td>';
                echo '<td>' . $locacion = $datos["jobs_results"][0]["location"];  '</td>';
                echo '<td>' . $via = $datos["jobs_results"][0]["via"];  '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
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
