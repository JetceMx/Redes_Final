<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Solicitantes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .solicitante {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            background-color: #f9f9f9;
        }

        .solicitante h3 {
            margin-top: 0;
        }

        .centered-form {
            display: flex;
            justify-content: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body onload="mostrarTodosSolicitantes();">
    <header>
        <?php include '../PHP/header.php'; ?>
    </header>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Buscar Solicitantes</h1>
        <div class="centered-form">
            <form id="buscarFormSolicitantes" class="form-inline mb-4">
                <div class="form-group mr-2">
                    <input type="text" class="form-control" id="keywordSolicitante" name="keywordSolicitante" placeholder="Palabra clave">
                </div>
                <div class="form-group mr-2">
                    <select class="form-control" id="localidadSolicitante" name="localidadSolicitante">
                        <option value="">Seleccione Localidad</option>
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select class="form-control" id="horarioSolicitante" name="horarioSolicitante">
                        <option value="">Seleccione Horario</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>

        <div id="resultadosSolicitantes"></div>
    </div>

    <script>
        document.getElementById('buscarFormSolicitantes').addEventListener('submit', function(event) {
            event.preventDefault();
            buscarSolicitantes();
        });

        function inicializarFiltrosSolicitantes() {
            const apiUrl = 'http://localhost:3000/solicitantes-curriculums';

            axios.get(apiUrl)
                .then(response => {
                    const solicitantes = response.data;

                    const localidades = [...new Set(solicitantes.map(solicitante => solicitante.localidad_SCL))].sort();
                    const horarios = [...new Set(solicitantes.map(solicitante => solicitante.horario_SCL))].sort();

                    const localidadSelect = document.getElementById('localidadSolicitante');
                    const horarioSelect = document.getElementById('horarioSolicitante');

                    localidades.forEach(localidad => {
                        const option = document.createElement('option');
                        option.value = localidad;
                        option.text = localidad;
                        localidadSelect.add(option);
                    });

                    horarios.forEach(horario => {
                        const option = document.createElement('option');
                        option.value = horario;
                        option.text = horario;
                        horarioSelect.add(option);
                    });
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                });
        }

        function buscarSolicitantes() {
            const keyword = document.getElementById('keywordSolicitante').value.toLowerCase();
            const localidad = document.getElementById('localidadSolicitante').value.toLowerCase();
            const horario = document.getElementById('horarioSolicitante').value.toLowerCase();
            const apiUrl = 'http://localhost:3000/solicitantes-curriculums';

            console.log(`Buscando solicitantes con la palabra clave: ${keyword}, localidad: ${localidad}, horario: ${horario}`);

            axios.get(apiUrl)
                .then(response => {
                    console.log('Datos recibidos de la API:', response.data);
                    const solicitantes = response.data;
                    const solicitantesFiltrados = solicitantes.filter(solicitante => {
                        return (keyword === '' || solicitante.nombre_SCL.toLowerCase().includes(keyword) ||
                                solicitante.correo_SCL.toLowerCase().includes(keyword)) &&
                            (localidad === '' || solicitante.localidad_SCL.toLowerCase() === localidad) &&
                            (horario === '' || solicitante.horario_SCL.toLowerCase() === horario);
                    });

                    mostrarResultadosSolicitantes(solicitantesFiltrados);
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                    document.getElementById('resultadosSolicitantes').innerHTML = '<div class="alert alert-danger">Error al obtener los datos. Verifica la URL y que el servidor esté funcionando.</div>';
                });
        }

        function mostrarTodosSolicitantes() {
            const apiUrl = 'http://localhost:3000/solicitantes-curriculums';

            console.log('Cargando todos los solicitantes...');

            axios.get(apiUrl)
                .then(response => {
                    console.log('Datos recibidos de la API:', response.data);
                    const solicitantes = response.data.slice(0, 10); // Limitar a los primeros 10 solicitantes
                    mostrarResultadosSolicitantes(solicitantes);
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                    document.getElementById('resultadosSolicitantes').innerHTML = '<div class="alert alert-danger">Error al obtener los datos. Verifica la URL y que el servidor esté funcionando.</div>';
                });
        }

        function mostrarResultadosSolicitantes(solicitantes) {
            const resultadosDiv = document.getElementById('resultadosSolicitantes');
            resultadosDiv.innerHTML = '';

            if (solicitantes.length > 0) {
                solicitantes.forEach(solicitante => {
                    const solicitanteDiv = document.createElement('div');
                    solicitanteDiv.classList.add('solicitante', 'card', 'mb-3');

                    solicitanteDiv.innerHTML = `
                        <div class="card-body">
                            <h3 class="card-title">${solicitante.nombre_SCL}</h3>
                            <p class="card-text"><strong>Cursos Adicionales:</strong> ${solicitante.cursos_adicionales}</p>
                            <p class="card-text"><strong>Correo:</strong> ${solicitante.correo_SCL}</p>
                            <p class="card-text"><strong>Teléfono:</strong> ${solicitante.telefono_SCL}</p>
                            <p class="card-text"><strong>Localidad:</strong> ${solicitante.localidad_SCL}</p>
                        </div>
                    `;

                    resultadosDiv.appendChild(solicitanteDiv);
                });
            } else {
                resultadosDiv.innerHTML = '<div class="alert alert-warning">No se encontraron resultados.</div>';
            }
        }

        inicializarFiltrosSolicitantes();
    </script>
    <script>
        //Verificar si el usuario está autenticado (ejemplo)
        let tipousr = localStorage.getItem('TipoUsr');

        if (tipousr == 'chambas') {
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