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
                            CASO 3 - POLITICAS DE COMPRA PARA VENDEDOR DE REVISTAS
                        </span></h3>
                    </div>
                </div>
                <div class="enunciadoEjercicio marginIzqDer">
                    <h3 class="text-simu2">¿Como funciona la aplicación?</h3>
                    <p>
                        La aplicacion permite ingresar los siguientes datos:
                    </p>
                    <p>
                        <strong>CANTIDAD DE COMPRA INICIAL</strong>
                        <br>
                        Se ingresa la cantidad de revistas a comprar por el vendedor al inicio del mes
                    </p>
                    <p>
                        <strong>COSTO DE COMPRA INICIAL</strong>
                        <br>
                        Se ingresa el costo de compra por unidad al inicio del mes
                        <br>
                        <strong>OJO: </strong> No se permite ingresar una cantidad de inventario inicial mayor a 30
                    </p>
                    <p>
                        <strong>COSTO DE VENTA AL PUBLICO</strong>
                        <br>
                        Se ingresa el costo por unidad con el cual se venden las revistas al publico
                    </p>
                    <p>
                        <strong>COSTO DE COMPRA ADICIONAL</strong>
                        <br>
                        Se ingresa el costo de compra de revistas por unidad que se realiza en el dia 10
                    </p>
                    <p>
                        <strong>COSTO DEVOLUCION INICIAL</strong>
                        <br>
                        Se ingresa el costo por unidad de las revistas que se devuelven en el dia 10
                    </p>
                    <p>
                        <strong>COSTO DEVOLUCION FINAL</strong>
                        <br>
                        Se ingresa el costo por unidad de las revistas que se devuelven al finalizar el mes
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
