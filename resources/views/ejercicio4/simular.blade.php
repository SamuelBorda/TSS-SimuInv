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
        <div class="py-4  bg-gray-400 text-white">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 4 - EVALUACION DE UN PROYECTO DE INVERSION
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href="{{ route('ejercicio4.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>    
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <form class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nrosimulaciones4">Número de simulaciones</label>
                            <input type="number" class="form-control" id="nrosimulaciones4" placeholder="Ingrese número de simulaciones">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="trema4">TREMA (%)</label>
                            <input type="number" class="form-control" id="trema4" placeholder="Ingrese el % de TREMA">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="aceptproy4">Aceptacion de proyecto (%)</label>
                            <input type="number" class="form-control" id="aceptacionProyecto4" placeholder="Ingrese el % de aceptacion del proyecto">
                        </div>
                    </div>
                    
                    <div class="botonIniciar">
                        <button type="submit" class="btn btn-gradientIniciar">Iniciar</button>
                    </div>               
                </form>
            </div>
            <div class="marginIzqDer resolucionEjercicio1 text-white">
                <div class="tablasimularcaso4" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Inversion <br>inicial</th>
                                <th>Flujo neto <br>año 1</th>
                                <th>Flujo neto <br>año 2</th>
                                <th>Flujo neto <br>año 3</th>
                                <th>Flujo neto <br>año 4</th>
                                <th>Flujo neto <br>año 5</th>
                                <th>Flujos de caja <br>totales</th>
                                <th>TIR</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla4">
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>105</td>
                                <td>50</td>
                                <td>15</td>
                                <td>14</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>105</td>
                                <td>88</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <h4 class="text-Ayuda">GRAFICO DE RESULTADOS</h4>
                </div>
                <div>
                    <h4 class="text-Ayuda">RESULTADOS:</h4>
                    <p>Promedio TIR:</p>
                    <p>El proyecto es:</p>
                </div>
                <div id="conclusionAceptada4">
                    <h4 class="text-Ayuda">CONCLUSION:</h4>
                    <p>El proyecto es ACEPTADO por que cumple con las espectativas deseadas por la empresa ya que 
                        supera la probabilidad de aceptacion establecida del (90%)</p>
                </div>
                <div id="conclusionRechazada4">
                    <h4 class="text-Ayuda">CONCLUSION:</h4>
                    <p>El proyecto es RECHAZADO por que no cumple con las espectativas deseadas por la empresa ya que
                        no supera la probabilidad de aceptacion establecida del (90%)</p>
                </div>

            </div>

           
        </div>
    </main>

@push('js')




 <!-- Initialize Flatpickr -->
 <script type="module">

    function(){
        
    }

 </script>
@endpush
</x-layout>