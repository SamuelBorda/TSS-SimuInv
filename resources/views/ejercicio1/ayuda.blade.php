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
                </div>
                <div class="enunciadoEjercicio marginIzqDer">
                    <h3 class="text-Ayuda">¿Como funciona la aplicación?</h3>
                    <p>
                        La aplicacion permite ingresar los siguientes datos:
                    </p>
                    <p>
                        <strong>NÚMERO DE DÍAS</strong> 
                        <br>
                        Se ingresa la cantidad de dias que se quiere simular
                    </p>
                    <p>
                        <strong>INVENTARIO INICIAL</strong> 
                        <br>
                        Se ingresa la cantidad de inventario con la que desea empezar la simulacion
                        <br>
                        <strong>OJO: </strong> No se permite ingresar una cantidad de inventario inicial mayor a 30
                    </p>
                    <p>
                        <strong>COSTO DE MANTENIMIENTO</strong> 
                        <br>
                        Se ingresa el costo faltante por unidad, hace referencia a no tener suficientes unidades disponibles para satisfacer la demanda.
                    </p>
                    <p>
                        <strong>COSTO FALTANTE</strong> 
                        <br>
                        Se ingresa el costo faltante por unidad, hace referencia a no tener suficientes unidades disponibles para satisfacer la demanda.
                    </p>
                    <p>
                        <strong>COSTO DE ORDENAR</strong> 
                        <br>
                        Se  ingresa el costo por realizar una orden de inventario.
                    </p>
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