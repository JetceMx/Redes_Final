<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/header.css">
</head>
<body>
    <header>
    <nav id="head"><a href="../PHP/Index.php"><h2>Chamba x Search</h2></a></nav>
    </header>

    <nav>
        <a href="../PHP/loginUsr.php " >Iniciar sesion</a>
        <a href="../PHP/registrousr.php">Registro</a>
        <a href="#">Chamba</a>
        <li class="nav-item dropdown">
        <a id="link1" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
            <li><hr class="dropdown-divider"></li>
            <li><a  id="milogout"class="dropdown-item" href="" onclick="miFuncion()">Cerrar sesion</a></li>
        </ul>
        </li>
    </nav>

    <!-- Contenido de la página va aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function miFuncion() {
            // Agrega aquí el código que deseas ejecutar al hacer clic en el enlace
            localStorage.removeItem('user');
            localStorage.removeItem('loggedIn');
            localStorage.removeItem('tipo');
        }

        let data = localStorage.getItem('user');
        if (data !== null) {
            
            let enlace = document.getElementById('link1');
            console.log(enlace);
            enlace.innerHTML = 'Bienvenido ' +data;
        } else {
            
            let enlace = document.getElementById('link1');
            console.log(enlace);
            enlace.innerHTML = 'Inicia sesion';
        }
        
        // Obtener la variable del Local Storage
        let valorVariable = localStorage.getItem('loggedIn');

        // Obtener la referencia a la etiqueta div
        let milogout = document.getElementById('milogout');

        // Verificar si la variable tiene un valor específico en el Local Storage
        if (valorVariable == 'true') {
            // Ocultar el div cambiando su estilo display a 'none'
            milogout.style.display = 'block';
        } else {
            // Dejar visible el div cambiando su estilo display a 'block' o cualquier otro adecuado
            milogout.style.display = 'none';
        }

    </script>
</body>
</html>
