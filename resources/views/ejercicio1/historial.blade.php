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
                <h3 class="text-Ayuda">HISTORIAL DE SIMULACIONES</h3>
            </div>
            <div class="tablaHistorialEjercicio1">
                <table class="tablaresponsiva">
                    <thead>
                    <tr>
                        <th>Numero dias</th>
                        <th>Inventario</th>
                        <th>Costo mantenimiento</th>
                        <th>Costo ordenar</th>
                        <th>Costo faltante</th>
                        <th>Costo politica 1</th>
                        <th>Costo politica 2</th>
                        <th>Mejor opción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>150</td>
                        <td>15 /unidades</td>
                        <td>200 $</td>
                        <td>500 $</td>
                        <td>1 $</td>
                        <td>300 $</td>
                        <td>320 $</td>
                        <td>Politica 1</td>
                    </tr>
                    <tr>
                        <td>180</td>
                        <td>15 /unidades</td>
                        <td>200 $</td>
                        <td>500 $</td>
                        <td>1 $</td>
                        <td>300 $</td>
                        <td>320 $</td>
                        <td>Politica 2</td>
                    </tr>
                    <tr>
                        <td>300</td>
                        <td>15 /unidades</td>
                        <td>200 $</td>
                        <td>500 $</td>
                        <td>1 $</td>
                        <td>300 $</td>
                        <td>320 $</td>
                        <td>Politica 1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
     </main>

@push('js')



 <!-- Initialize Flatpickr -->
 <script type="module">




    </script>
@endpush
</x-layout>