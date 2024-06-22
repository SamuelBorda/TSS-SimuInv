<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="container-fluid py-4 bg-gray-400"> <!-- Espacio adicional -->     </div>  

        <div class="container-fluid py-4 bg-dark-400 text-white">
            <h3 class="text-start ps-5">
                <span class="bg-gradient-simu px-4 py-2">
                    CASO 2 - MANTENIMIENTO DE EQUIPOS
                </span>
            </h3>
        </div> 

        <div class="container-fluid py-4 bg-gray-400"> 
            <h3 class="texto-politica">HISTORIAL DE SIMULACIONES</h3>
        </div> 

        <div class="container-fluid py-4 bg-gray-400 text-white">
            <table id="historyTable" class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Tiempo horas de simulación</th>
                        <th>Costo por componente</th>
                        <th>Costo por hora desconexión</th>
                        <th>Costo Política 1</th>
                        <th>Costo Política 2</th>
                        <th>Mejor opción</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- LAS FILAS SE VA ANIADIENDO DINAMICAMENTE POR JS-->
                    <!-- \TSS-SimuInv\storage\app\public simulacion-historial.json  AHI DEBE DE ESTAR EN .JSON donde se encuentra los datos para mostrar-->
                </tbody>
            </table>
        </div>

    </main>

    @push('css')
    <style>
        .texto-politica {
            color: #00F0FF;
        }
    </style>
    @endpush

    @push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    fetch('/api/simulations')
        .then(response => response.json())
        .then(data => {
            if (Array.isArray(data) && data.length > 0) {
                // Procesar y mostrar los datos en la tabla u otro componente
                console.log(data); //Muestra los datos en la consola para verificar

                const historyTable = document.getElementById('historyTable');
                data.forEach(simulation => {
                    const row = historyTable.insertRow();
                    row.innerHTML = `
                        <td>${simulation.tiempo_simulacion}</td>
                        <td>${simulation.costo_componente}</td>
                        <td>${simulation.costo_desconexion}</td>
                        <td>${simulation.costo_politica1}</td>
                        <td>${simulation.costo_politica2}</td>
                        <td>${simulation.mejor_opcion}</td>
                    `;
                });
            } else {
                console.error('La respuesta del servidor no son datos válidos:', data);
            }
        })
        .catch(error => {
            console.error('Error al cargar el historial de simulaciones:', error);
        });
    });
    </script>
    @endpush
</x-layout>
