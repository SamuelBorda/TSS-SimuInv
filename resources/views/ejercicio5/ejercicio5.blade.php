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
                <div class="botonayuda">
                      <a href="{{ route('ejercicio5.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
            <p>
                La demanda diaria y el tiempo de entrega de un cierto producto, siguen las siguientes  distribuciones de probabilidad:
                </p>
                <div class="tablaHistorialEjercicio1">
                    <table class="tablacincodem" >
                        <thead class="thead-light">
                            <tr>
                                <th>Demanda Diaria</th>
                                <th>Probabilidad</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0</td>
                                <td>0.04</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0.04</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>0.10</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>0.20</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>0.30</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>0.18</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td>0.08</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td>0.03</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td>0.01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tablaHistorialEjercicio1">
                    <table class="tablacincotiem" >
                        <thead class="thead-light">
                            <tr>
                                <th>Tiempo de <br>entrega (Dias)</th>
                                <th>Probabilidad</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0.25</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>0.50</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>0.20</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>0.05</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <p>
                La informacion con respecto a los costos relevantes es la siguiente:
                </p>
                <div class="tablaHistorialEjercicio1">
                    <table class="tablacincocosto">
                        <thead class="thead-light">
                            <tr>
                                <th>Costo de ordenar</th>
                                <th>$50/orden </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Costo de inventario</td>
                                <td>$26/unidad/año</td>

                            </tr>
                            <tr>
                                <td>Costo de faltante</td>
                                <td>$25/unidad</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                Si el inventario inicial es de 15 unidades, ¿determine la cantidad optima a ordenar (q) y el nivel  óptimo de reorden (R)? (Asuma que se trabajan 260 días en el año.).
                </p>
            </div>
            <div class="botonesEjercicio1 marginIzqDer">
                <div class="botonverhistorial">
                    <a href=" {{ route('ejercicio5.historial') }} " class="btn btn-gradienthistorial">Ver historial</a>
                </div>
                <div class="botonSimular">
                    <a href=" {{ route('ejercicio5.simular') }} " class="btn btn-gradientsimular">Simular</a>
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
