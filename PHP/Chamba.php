<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

echo "El nombre de la chamba es: " .$nombre;
echo "<br>";
echo "El nombre de la compañia es: " .$compania;
echo "<br>";
echo "El lugar es en: " .$locacion;
echo "<br>";
echo "El metodo de contacto es: " .$via;




?>

    
</body>
</html>
