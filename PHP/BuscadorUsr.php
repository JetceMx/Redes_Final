<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vacantes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vacante {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            background-color: #f9f9f9;
        }

        .vacante h3 {
            margin-top: 0;
        }

        .centered-form {
            display: flex;
            justify-content: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body onload="inicializarFiltros(); mostrarTodos();">
    <header>
        <?php include '../PHP/header.php'; ?>
    </header>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Buscar Vacantes</h1>
        <div class="centered-form">
            <form id="buscarForm" class="form-inline mb-4">
                <div class="form-group mr-2">
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Palabra clave">
                </div>
                <div class="form-group mr-2">
                    <select class="form-control" id="lugar" name="lugar">
                        <option value="">Seleccione Lugar</option>
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select class="form-control" id="tipo_trabajo" name="tipo_trabajo">
                        <option value="">Seleccione Tipo de Trabajo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>

        <div id="resultados"></div>
    </div>

    <script>
        document.getElementById('buscarForm').addEventListener('submit', function(event) {
            event.preventDefault();
            buscarVacantes();
        });

        function inicializarFiltros() {
            const apiUrl = 'http://192.168.1.78:3000/vacantes';

            axios.get(apiUrl)
                .then(response => {
                    const vacantes = response.data;

                    const lugares = [...new Set(vacantes.map(vacante => vacante.lugar_VC))].sort();
                    const tiposTrabajo = [...new Set(vacantes.map(vacante => vacante.tipo_trabajo_VC))].filter(tipo => tipo !== "Freelance").sort();

                    const lugarSelect = document.getElementById('lugar');
                    const tipoTrabajoSelect = document.getElementById('tipo_trabajo');

                    lugares.forEach(lugar => {
                        const option = document.createElement('option');
                        option.value = lugar;
                        option.text = lugar;
                        lugarSelect.add(option);
                    });

                    tiposTrabajo.forEach(tipo => {
                        const option = document.createElement('option');
                        option.value = tipo;
                        option.text = tipo;
                        tipoTrabajoSelect.add(option);
                    });
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                });
        }

        function buscarVacantes() {
            const keyword = document.getElementById('keyword').value.toLowerCase();
            const lugar = document.getElementById('lugar').value.toLowerCase();
            const tipo_trabajo = document.getElementById('tipo_trabajo').value.toLowerCase();
            const apiUrl = 'http://192.168.1.78:3000/vacantes';

            console.log(`Buscando vacantes con la palabra clave: ${keyword}, lugar: ${lugar}, tipo de trabajo: ${tipo_trabajo}`);

            axios.get(apiUrl)
                .then(response => {
                    console.log('Datos recibidos de la API:', response.data);
                    const vacantes = response.data;
                    const vacantesFiltradas = vacantes.filter(vacante => {
                        return (keyword === '' || vacante.nombre_VC.toLowerCase().includes(keyword) ||
                                vacante.descripcion_VC.toLowerCase().includes(keyword)) &&
                            (lugar === '' || vacante.lugar_VC.toLowerCase() === lugar) &&
                            (tipo_trabajo === '' || vacante.tipo_trabajo_VC.toLowerCase() === tipo_trabajo);
                    });

                    mostrarResultados(vacantesFiltradas);
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                    document.getElementById('resultados').innerHTML = '<div class="alert alert-danger">Error al obtener los datos. Verifica la URL y que el servidor esté funcionando.</div>';
                });
        }

        function mostrarTodos() {
            const apiUrl = 'http://192.168.1.78:3000/vacantes';

            console.log('Cargando todas las vacantes...');

            axios.get(apiUrl)
                .then(response => {
                    console.log('Datos recibidos de la API:', response.data);
                    const vacantes = response.data.slice(0, 10); // Limitar a las primeras 10 vacantes
                    mostrarResultados(vacantes);
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                    document.getElementById('resultados').innerHTML = '<div class="alert alert-danger">Error al obtener los datos. Verifica la URL y que el servidor esté funcionando.</div>';
                });
        }

        function mostrarResultados(vacantes) {
            const resultadosDiv = document.getElementById('resultados');
            resultadosDiv.innerHTML = '';

            if (vacantes.length > 0) {
                vacantes.forEach(vacante => {
                    const vacanteDiv = document.createElement('div');
                    vacanteDiv.classList.add('vacante', 'card', 'mb-3');

                    vacanteDiv.innerHTML = `
                        <div class="card-body">
                            <h3 class="card-title">${vacante.nombre_VC}</h3>
                            <p class="card-text"><strong>Descripción:</strong> ${vacante.descripcion_VC}</p>
                            <p class="card-text"><strong>Lugar:</strong> ${vacante.lugar_VC}</p>
                            <p class="card-text"><strong>Tipo de Trabajo:</strong> ${vacante.tipo_trabajo_VC}</p>
                            <p class="card-text"><strong>Fecha de Publicación:</strong> ${vacante.fecha_publicacion}</p>
                        </div>
                    `;

                    resultadosDiv.appendChild(vacanteDiv);
                });
            } else {
                resultadosDiv.innerHTML = '<div class="alert alert-warning">No se encontraron resultados.</div>';
            }
        }
    </script>
    <script>
        //Verificar si el usuario está autenticado (ejemplo)
        let tipousr = localStorage.getItem('TipoUsr');

        if (tipousr == 'patron') {
            alert('No puedes acceder a esta pagina');
            // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
            window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
            // O muestra un mensaje de error

        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <footer>
        <?php include '../PHP/piepagina.php'; ?>
    </footer>
</body>

</html>