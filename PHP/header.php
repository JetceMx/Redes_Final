<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="nav-deg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../PHP/Index.php">
                <img src="../IMG/logo.png" alt="Logo" height="80" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../PHP/BuscadorUsr.php">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../PHP/BuscadorEmp.php">Empresa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="vc" class="dropdown-item" href="../PHP/Chamba.php">Vacante</a></li>
                            <li><a id="sol" class="dropdown-item" href="../PHP/ChambaDiseño.php">Solicitante</a></li>
                            <li><a id="prop" class="dropdown-item" href="../PHP/ChambaAnalista.php">Propuesta</a></li>
                            <li><a id="usrem" class="dropdown-item" href="../PHP/ChambaAnalista.php">Usuario Empresa</a></li>
                        </ul>
                    </li>
                </ul>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link btn btn-primary dropdown-toggle" style="background-color:#63CAA7" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user fa-1x" style="color:#26798E"></i> Ingresar
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a id="milogout" class="dropdown-item" href="#" onclick="miFuncion()">Cerrar sesión</a></li>
                            <li><a id="milogout2" class="dropdown-item" href="#">Debes iniciar sesión</a></li>
                            <li><a id="milogout4" class="dropdown-item" href="../PHP/loginUsr.php">Iniciar sesión como Chambeador</a></li>
                            <li><a id="milogout5" class="dropdown-item" href="../PHP/loginEmp.php">Iniciar sesión como Empresa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Agregar el script de Bootstrap para funcionalidad de los dropdowns -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+CB9kP7yN1I6PRG8t/7aqTRHd98Gd" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>

    <!-- Contenido de la página va aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function miFuncion() {
            // Agrega aquí el código que deseas ejecutar al hacer clic en el enlace
            localStorage.removeItem('TipoUsr');

        }

        let data = localStorage.getItem('TipoUsr');

        // Verificar si la variable tiene un valor específico en el Local Storage
        if (data == 'patron') {
            // Ocultar el div cambiando su estilo display a 'none'
            vc.style.display = 'block';
            usrem.style.display = 'none';

            sol.style.display = 'none';
            prop.style.display = 'none';
        } else if (data = 'chambas') {
            // Dejar visible el div cambiando su estilo display a 'block' o cualquier otro adecuado
            vc.style.display = 'none';
            usrem.style.display = 'none';

            sol.style.display = 'none';
            prop.style.display = 'block';
        }
    </script>

</body>

</html>