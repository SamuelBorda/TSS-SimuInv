<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
         
        <br>
        <br>
        <br>
        <div class="py-4  bg-gray-400">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 1 - COMPARACIÓN DE POLITICAS DE INVENTARIO
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href=" {{ route('ejercicio1.ayuda') }} " class="btn btn-gradient-outline">¿Necesitas ayuda?</a>
                </div>             
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <form class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloNumDias">Número de días</label>
                            <input type="text" class="form-control" id="numdias" placeholder="Ingrese número de días">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni">Inventario inicial</label>
                            <input type="text" class="form-control" id="inventarioIni" placeholder="Ingrese inventario inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante">Costo de mantenimiento</label>
                            <input type="text" class="form-control" id="costoMantenimiento" placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta">Costo de faltante</label>
                            <input type="text" class="form-control" id="costoFaltante" placeholder="Ingrese costo de faltante">
                        </div>
                        </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar">Costo de ordenar</label>
                            <input type="text" class="form-control" id="costoOdernar" placeholder="Ingrese costo de ordenar">
                        </div>
                    </div>
                    <div class="botonIniciar">
                        <button type="submit" class="btn btn-gradientIniciar">Iniciar</button>
                    </div>               
                </form>
            </div>
            <div class="marginIzqDer resolucionEjercicio1 text-white">
                <p>
                    <strong>Politica 1: </strong> Ordenar cada 8 dias hasta tener 30 articulos en inventario 
                </p>
                <div class="tablaPolitica1" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Demanda</th>
                                <th>Vendido</th>
                                <th>Inventario</th>
                                <th>Pedido</th>
                                <th>Cantidad pedido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>105</td>
                                <td>SI</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>105</td>
                                <td>NO</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>105</td>
                                <td>SI</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                    <strong>Politica 2: </strong> Ordenar hasta tener 30 articulos cuando el nivel de inventario sea menor o igual a 10
                </p>
                <div class="tablaPolitica2" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Demanda</th>
                                <th>Vendido</th>
                                <th>Inventario</th>
                                <th>Pedido</th>
                                <th>Cantidad pedido</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="grafico" style="margin-top:20px;">
                    <h3 class="text-Ayuda">GRAFICO DE RESULTADOS</h3>
                </div>
                <div class="resultados">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-Ayuda">COSTOS POLITICA 1</h3>
                            <p>Costo total de mantenimiento : $</p>
                            <p>Costo total de ordenar: $</p>
                            <p>Costo total de faltante: $</p>
                            <p>COSTO TOTAL: $</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-Ayuda">COSTOS POLITICA 2</h3>
                            <p>Costo total de mantenimiento : $</p>
                            <p>Costo total de ordenar: $</p>
                            <p>Costo total de faltante: $</p>
                            <p>COSTO TOTAL: $</p>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="text-Ayuda">CONCLUSIÓN</h3>
                        <p>
                            La Politica 2 es mas económica y eficiente debido a su capacidad para reducir costos de mantenimiento, 
                            faltantes y mejorar la flexibilidad en la gestión del inventario. 
                        </p>
                    </div>
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