<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vacantes</title>
    <style>
        .vacante {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <form id="buscarForm">
        <input type="text" id="keyword" name="keyword" placeholder="Palabra clave" required>
        <button type="submit">Buscar</button>
    </form>

    <div id="resultados"></div>

    <script>
        document.getElementById('buscarForm').addEventListener('submit', function(event) {
            event.preventDefault();
            buscarVacantes();
        });

        function buscarVacantes() {
            const keyword = document.getElementById('keyword').value.toLowerCase();
            const apiUrl = 'http://192.168.1.78:3000/vacantes';

            axios.get(apiUrl)
                .then(response => {
                    const vacantes = response.data;
                    const vacantesFiltradas = vacantes.filter(vacante => {
                        return vacante.nombre_VC.toLowerCase().includes(keyword) ||
                            vacante.descripcion_VC.toLowerCase().includes(keyword) ||
                            vacante.lugar_VC.toLowerCase().includes(keyword) ||
                            vacante.tipo_trabajo_VC.toLowerCase().includes(keyword);
                    });

                    mostrarResultados(vacantesFiltradas);
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                });
        }

        function mostrarResultados(vacantes) {
            const resultadosDiv = document.getElementById('resultados');
            resultadosDiv.innerHTML = '';

            if (vacantes.length > 0) {
                vacantes.forEach(vacante => {
                    const vacanteDiv = document.createElement('div');
                    vacanteDiv.classList.add('vacante');

                    vacanteDiv.innerHTML = `
                        <h3>${vacante.nombre_VC}</h3>
                        <p><strong>Descripción:</strong> ${vacante.descripcion_VC}</p>
                        <p><strong>Lugar:</strong> ${vacante.lugar_VC}</p>
                        <p><strong>Tipo de Trabajo:</strong> ${vacante.tipo_trabajo_VC}</p>
                        <p><strong>Fecha de Publicación:</strong> ${vacante.fecha_publicacion}</p>
                    `;

                    resultadosDiv.appendChild(vacanteDiv);
                });
            } else {
                resultadosDiv.innerHTML = '<p>No se encontraron resultados.</p>';
            }
        }
    </script>
</body>

</html>