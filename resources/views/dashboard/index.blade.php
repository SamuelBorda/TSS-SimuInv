<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

<br>
<br>
<br>

    <div class="container-fluid py-4  bg-gray-400 text-white">
    <h1 class="text-center">
    <span class="bg-gradient-simu px-4 py-2">
        BIENVENIDOS A SIMUINV
    </span>
</h1>
            <p class="text-center">
                En esta plataforma, tendrás la oportunidad de ejecutar y analizar cinco ejercicios de simulación enfocados en sistemas de inventarios e inversiones. Cada ejercicio cuenta con una resolución específica, y aquí te guiaremos detalladamente a través de los resultados obtenidos y su significado.
            </p>

            <h2> <span class="bg-gradient-titleejercicio">
            CASOS DISPONIBLES
            </span></h2>
            <div >
                <div>
                    <h3 class="text-Ayuda">1. Comparación de Políticas de Inventario</h3>
                    <p>
                        <strong>Descripción:</strong> Determina la política de inventario más económica entre dos opciones basadas en demanda diaria y tiempo de entrega.
                        <br>
                        <strong>Parámetros:</strong> Distribución binomial y Poisson, costos de mantenimiento, faltantes y órdenes.
                    </p>
                </div>
                <div >
                    <h3 class="text-Ayuda">2. Mantenimiento de equipos</h3>
                    <p>
                        <strong>Descripción:</strong> Evalúa dos estrategias de reemplazo para componentes electrónicos de un equipo, considerando la reducción de desconexiones.
                        <br>
                        <strong>Parámetros:</strong> Distribución normal del tiempo de vida de los componentes, costos de componentes y tiempos de desconexión.
                    </p>
                </div>
            </div>
            <div >
                <div >
                    <h3 class="text-Ayuda">3. Política de Compra para un Vendedor de Revistas</h3>
                    <p>
                        <strong>Descripción:</strong> Optimiza la política de compra y devolución de revistas mensuales con base en la demanda y costos asociados.
                        <br>
                        <strong>Parámetros:</strong> Distribuciones de demanda, precios de compra y devolución, precios al público.
                    </p>
                </div>
                <div >
                    <h3 class="text-Ayuda">4. Evaluación de un Proyecto de Inversión</h3>
                    <p>
                        <strong>Descripción:</strong> Decide si emprender un nuevo proyecto de inversión analizando la probabilidad de superar una tasa mínima de retorno.
                        <br>
                        <strong>Parámetros:</strong> Distribución normal de la inversión inicial y flujo neto anual, horizonte de planeación de 5 años.
                    </p>
                </div>
                <div >
                    <h3 class="text-Ayuda">5. Optimización de inventario y reorden</h3>
                    <p>
                        <strong>Descripción:</strong> Determina la cantidad óptima a ordenar y el nivel óptimo de reorden para un producto con demanda diaria variable y tiempo de entrega.
                        <br>
                        <strong>Parámetros:</strong> Distribuciones de demanda diaria y tiempo de entrega, costos de orden, inventario y faltantes.
                    </p>
                </div>
            </div>
        </div>
    </div>




    </main>




    @push('js')




     <!-- Initialize Flatpickr -->
     <script type="module">

        </script>
    @endpush
</x-layout>
