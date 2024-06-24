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
                <div class="botonayuda">
                    <a href="{{ route('ejercicio3.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <p>
                Un vendedor de revistas compra mensualmente una revista el día primero de cada mes. El costo  de cada ejemplar es de $ 1.50. La demanda de esta revista en los primeros 10 días del mes sigue la  siguiente distribución de probabilidad:
                </p>
                <div class="tablaHistorialEjercicio1">
                    <table class="tablatresdemanda" >
                        <thead class="thead-light">
                            <tr>
                                <th>Demanda</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Probabilidad</td>
                                <td>0.05</td>
                                <td>0.05</td>
                                <td>0.10</td>
                                <td>0.15</td>
                                <td>0.25</td>
                                <td>0.25</td>
                                <td>0.15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <p>
                Al final del décimo día, el vendedor puede regresar cualquier cantidad al proveedor, quien se las  pagan a $0.90 el ejemplar, o comprar más a $1.20 el ejemplar. La demanda en los siguientes 20 días  está dada por la siguiente distribución de probabilidad:
                </p>
                <div class="tablaHistorialEjercicio1">
                    <table class="tablatresdem">
                        <thead class="thead-light">
                            <tr>
                                <th>Demanda</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Probabilidad</td>
                                <td>0.15</td>
                                <td>0.20</td>
                                <td>0.30</td>
                                <td>0.20</td>
                                <td>0.15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                Al final del mes, el vendedor puede regresar al proveedor las revistas que le sobren, las cuales se le  pagaran a $0.60 el ejemplar. Finalmente, se asume que después de un mes ya no existe demanda  por parte del público, puesto que para ese entonces ya habrá aparecido el nuevo número de la  revista. Si el precio al público es de $2 por ejemplar, determine la política optima de compra.
                </p>
            </div>
            <div class="botonesEjercicio1 marginIzqDer">
                <div class="botonverhistorial">
                    <a href=" {{ route('ejercicio3.historial') }} " class="btn btn-gradienthistorial">Ver historial</a>
                </div>
                <div class="botonSimular">
                    <a href=" {{ route('ejercicio3.simular') }} " class="btn btn-gradientsimular">Simular</a>
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
