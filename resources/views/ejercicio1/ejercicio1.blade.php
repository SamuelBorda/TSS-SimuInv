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
                        CASO 1 - COMPARACIÓN DE POLITICAS DE INVENTARIO
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href="{{ route('ejercicio1.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <p>
                    La demanda diaria de un cierto articulo está regida por una distribución binomial con parámetros N = 6     θ = 1/2. El tiempo de entrega en días es una variable aleatoria Poisson con λ = 3. El costo de mantener una unidad en inventario es de $1 por día. El costo del faltante es de $10 por unidad, y el costo de ordenar es de $50 por orden. Se desea comparar dos políticas para llevar el inventario:
                </p>
                <p>
                    <strong>1:</strong> Ordenar cada 8 dias hasta tener 30 articulos en inventario.
                    <br>
                    <strong>2:</strong> Ordenar hasta 30 artículos cuando  el nivel del inventario sea menor o igual a 10.
                </p>
                <p>
                    Si se asume que las unidades faltantes en un ciclo son  surtidas por la nueva orden que arriba en el próximo ciclo, ¿Cuál de las dos políticas descritas es  más económica?
                </p>
            </div>
            <div class="botonesEjercicio1 marginIzqDer">
                <div class="botonverhistorial">
                    <a href=" {{ route('ejercicio1.historial') }} " class="btn btn-gradienthistorial">Ver historial</a>
                </div>
                <div class="botonSimular">
                    <a href=" {{ route('ejercicio1.simular') }} " class="btn btn-gradientsimular">Simular</a>
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

