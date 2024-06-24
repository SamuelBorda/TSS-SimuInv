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
                <table class="tablaresponsivaCinco">
                    <thead>
                    <tr>
                        <th>Inventario</th>
                        <th>Costo Ordenar</th>
                        <th>Costo Inventario</th>
                        <th>Costo Faltante</th>
                        <th>Valor De Orden(Q)</th>
                        <th>Valor De Reorden(R)</th>
                        <th>Costo Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historial as $item)
                    <tr>
                        <td>{{ $item->InventarioInicial }} <span>unidades</span></td>
                        <td>{{ $item->CostoDeOrdenar }} <span>$/orden</span></td>
                        <td>{{ $item->CostoDeInventario }} <span>$/ud/año</span></td>
                        <td>{{ $item->CostoDeFaltante }} $/ud</td>
                        <td>{{ $item->PoliticaQ }} <span>unidades</span></td>
                        <td>{{ $item->PoliticaR }} <span>unidades</span></td>
                        <td>{{ $item->CostoTotal }} <span>$</span></td>
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
