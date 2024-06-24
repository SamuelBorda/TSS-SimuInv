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
                        CASO 5 - OPTIMIZACIÓN DE INVENTARIO Y REORDEN
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
                        <th>Inventario</th>
                        <th>Costo Ordenar</th>
                        <th>Costo Inventario</th>
                        <th>Costo Faltante</th>
                        <th>Valor De Orden</th>
                        <th>Valor De Reorden</th>
                        <th>Costo Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historial as $item)
                    <tr>
                        <td>{{ $item->InventarioInicial }}</td>
                        <td>{{ $item->CostoDeOrdenar }}</td>
                        <td>{{ $item->CostoDeInventario }}</td>
                        <td>{{ $item->CostoDeFaltante }}</td>
                        <td>{{ $item->PoliticaQ }}</td>
                        <td>{{ $item->PoliticaR }}</td>
                        <td>{{ $item->CostoTotal }}</td>
                    </tr>
                    @endforeach
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
