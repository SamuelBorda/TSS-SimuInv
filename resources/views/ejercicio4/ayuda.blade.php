<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <br>
        <br>
        <br>
        <div class="py-4  bg-gray-400 text-white">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 4 - EVALUACION DE UN PROYECTO DE INVERSION
                    </span></h3>
                </div>       
            </div>

            <div>
                <h4 class="tituloazul">¿Como funciona la aplicación?</h4>
            </div>

            <div class="marginIzqDer">
                <p>
                    La aplicacion permite ingresar los siguientes datos
                </p>
                <p>
                    <strong>NUMERO DE SIMULACIONES</strong>
                </p>
                <p>
                    Se ingresa el numero de simulaciones que se desea mostrar.
                </p>
                <p>
                    <strong>TREMA (%)</strong>
                </p>
                <p>
                    Se ingresa el porcentaje de la Tasa de Retorno Esperada Mínima Aceptable (TREMA). Esto significa que se aceptará el proyecto de inversión si la probabilidad de que la Tasa Interna de Retorno (TIR) sea mayor o igual a la TREMA es suficientemente alta. La TREMA es una medida que establece el rendimiento mínimo necesario para que una inversión sea considerada viable.
                </p>
                <p>
                    <strong>ACEPTACION DE PROYECTO (%)</strong>
                </p>
                <p>
                Se ingresa el porcentaje de aceptación del proyecto, el cual indica el nivel de satisfacción con los resultados de la simulación o el desempeño del proyecto.
                </p>
            </div>
        </div>
        
    </main>

@push('js')




 <!-- Initialize Flatpickr -->
 <script type="module">




    </script>
@endpush
</x-layout>