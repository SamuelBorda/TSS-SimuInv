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
                <h3 class="text-Ayuda">HISTORIAL DE SIMULACIONES</h3>
            </div>
            <div class="tablaHistorialEjercicio1">
                <table class="tablaresponsivaTres">
                    <thead>
                    <tr>
                        <th>Cantidad de compra inicial</th>
                        <th>Costo de compra inicial</th>
                        <th>Costo de venta al público</th>
                        <th>Costo de compra adicional</th>
                        <th>Costo de devolución inicial</th>
                        <th>Costo de devolución final</th>
                        <th>Costo politica 1</th>
                        <th>Costo politica 2</th>
                        <th>Mejor opción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($historial as $item)
                    <tr>
                        <td>{{ $item->Cantidadcomprainicial }} <span>unidades</span></td>
                        <td>{{ $item->Costocomprainicial }} <span>$/ud</span></td>
                        <td>{{ $item->Costoventa }} <span>$/ud</span></td>
                        <td>{{ $item->Costocompraadicional }} <span>$/ud</span></td>
                        <td>{{ $item->Costodevolucioninicial }} <span>$/ud</span></td>
                        <td>{{ $item->Costodevolucionfinal }} <span>$/ud</span></td>
                        <td>{{ $item->Costopolitica1 }} <span>$</span></td>
                        <td>{{ $item->Costopolitica2 }} <span>$</span></td>
                        <td>{{ $item->Mejoropcion }}</td>
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
