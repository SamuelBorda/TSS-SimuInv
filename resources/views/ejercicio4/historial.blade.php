<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <br>
        <br>
        <br>
        <div class="py-4 bg-gray-400 text-white">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 4 - EVALUACION DE UN PROYECTO DE INVERSION
                    </span></h3>
                </div>
            </div>

            <div class="enunciadoEjercicio marginIzqDer">
                <h3 class="text-Ayuda">HISTORIAL DE SIMULACIONES</h3>
            </div>
            <div class="tablaHistorialEjercicio1">
                    <table class="tablaresponsivaCuatro">
                        <thead>
                        <tr>
                            <th>Numero de simulaciones</th>
                            <th>TREMA (%)</th>
                            <th>Aceptacion de proyecto</th>
                            <th>Promedio TIR</th>
                            <th>El proyecto es</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($historial as $item)
                            <tr>
                                <td>{{ $item->NumeroSimulaciones }}</td>
                                <td>{{ $item->TREMA }} <span>%</span></td>

                                <td>{{ $item->Aceptacionproyecto }} <span>%</span></td>
                                <td>{{ $item->PromedioTIR }} <span>%</span></td>
                                <td>{{ $item->Mejoropcion }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
