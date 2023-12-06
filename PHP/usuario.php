<!DOCTYPE html>
<html lang="ea">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .testimonial {
            text-align: center;
            margin: 20px;
        }

        .testimonial img {
            border-radius: 50%;
            max-width: 100px;
            height: auto;
        }

        .about-section {
            text-align: center;
            padding: 30px;
            background-color: #f9f9f9;
        }
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
        include '../PHP/headerUsr.php'
    ?>

<h4>HOLA MUNDO</h4>

    <?php
        include '../PHP/piepagina.php'
    ?>
    
</body>
</html> 