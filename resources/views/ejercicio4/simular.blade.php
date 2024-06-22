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
                <div class="formularioEjercicio1">
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
                        <button type="button" class="btn btn-gradientIniciar" id="btnIniciar4">Iniciar</button>
                    </div>               
                </div>
            </div>
            <div class="marginIzqDer resolucionEjercicio1 text-white">
                <div class="tablasimularcaso4" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white" id="tablaResultados">
                        <thead>
                            <tr>
                                <th>Numero de <br>simulacion</th>
                                <th>Inversion <br>inicial</th>
                                <th>Flujo neto <br>año 1</th>
                                <th>Flujo neto <br>año 2</th>
                                <th>Flujo neto <br>año 3</th>
                                <th>Flujo neto <br>año 4</th>
                                <th>Flujo neto <br>año 5</th>
                                <th>TIR</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla">
                            <tr>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="grafico4" style="margin-top:20px;">
                    <h4 class="text-Ayuda">GRAFICO DE RESULTADOS</h4>
                </div>
                <div class="resultadosejercicio4">
                    <h4 class="text-Ayuda">RESULTADOS:</h4>
                    <p>Promedio TIR:</p>
                    <p>El proyecto es:</p>
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
        </div>
    </main>

@push('js')
<script>
    //let arregloInventarioIni = [];
    // Función para simular con los parámetros correctos y llenado de resultados
    function simular(numeroSimulaciones,trema,aceptacionProyecto) {
        let resultados = [];

        // Generar resultados para cada simulacion
        for (let simulacion= 1; simulacion <= numeroSimulaciones; simulacion++) {
            
            let inversionInicial = calcularInvIni();
            let fnanio1 = 0;
            let fnanio2 = 0;
            let fnanio3 = 0;
            let fnanio4 = 0;
            let fnanio5 = 0;
            let tir = 0;

            // Guardar resultado del día en el array de resultados
            resultados.push({
                simulacion: simulacion,
                inversionInicial:inversionInicial,
                fnanio1:fnanio1,
                fnanio2:fnanio2,
                fnanio3:fnanio3,
                fnanio4:fnanio4,
                fnanio5:fnanio5,
                tir: tir
            });
            //arregloInventarioIni.push(inversionInicial);
        }

        // Construir la tabla HTML con los resultados
        construirTabla(resultados);
    }
    function calcularInvIni(){
    }
    // Función para construir la tabla HTML con los resultados de la simulación
    function construirTabla(resultados) {
        let cuerpoTabla = document.getElementById('cuerpoTabla');
        cuerpoTabla.innerHTML = '';

        resultados.forEach(resultado => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${resultado.simulacion}</td>
                <td>${resultado.inversionInicial}</td>
                <td>${resultado.fnanio1}</td>
                <td>${resultado.fnanio2}</td>
                <td>${resultado.fnanio3}</td>
                <td>${resultado.fnanio4}</td>
                <td>${resultado.fnanio5}</td>
                <td>${resultado.tir}</td>
            `;
            cuerpoTabla.appendChild(fila);
        });
    }
    // Evento al hacer clic en el botón Iniciar
    document.getElementById('btnIniciar4').addEventListener('click', function() {
        const numeroSimulaciones = parseFloat(document.getElementById('nrosimulaciones4').value);
        const trema = parseFloat(document.getElementById('trema4').value);
        const aceptacionProyecto= parseFloat(document.getElementById('aceptacionProyecto4').value);
        simular(numeroSimulaciones,trema,aceptacionProyecto);
    });

</script>
@endpush
</x-layout>