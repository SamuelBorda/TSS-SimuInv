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
                    <p id="promedioTIR">Promedio TIR:</p>
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
    //DISTRIBUCION INVERSION INICIAL
    const mediaInvIni = 100000;
    const desvInvIni = 5000;
    //DISTRIBUCION FLUJO DEL PERIODO
    const mediaFlujoPeriodo = 30000;
    const desvFlujoPeriodo = 3000;

    // Función para simular con los parámetros correctos y llenado de resultados
    function simular(numeroSimulaciones,trema,aceptacionProyecto) {
        let resultados = [];

        // Generar resultados para cada simulacion
        for (let simulacion= 1; simulacion <= numeroSimulaciones; simulacion++) {
            
            let inversionInicial = calcularInvIni();
            let fnanio1 = calcularFnAnual();
            let fnanio2 = calcularFnAnual();
            let fnanio3 = calcularFnAnual();
            let fnanio4 = calcularFnAnual();
            let fnanio5 = calcularFnAnual();
             // Calcular la TIR para estos flujos de caja
            let flujos = [-inversionInicial, fnanio1, fnanio2, fnanio3, fnanio4, fnanio5];
            let tir = calcularTIR(flujos);

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
        //CALCULAR PROMEDIO TIR
        let promedioTIR = calcularPromedioTIR(resultados);
        //MOSTRAR PROMEDIO TIR
        mostrarPromedioTIR(promedioTIR);
        // Construir la tabla HTML con los resultados
        construirTabla(resultados);
    }
    //CALCULOS DE TABLAA---------------------------------------------------------------------------------------------------
    function calcularInvIni() {
        let aleatorio = Math.random();
        let res = mediaInvIni + (desvInvIni * normInv(aleatorio,0,1));
        return res;
    }

    function calcularFnAnual(){
        let aleatorio = Math.random();
        let res = mediaFlujoPeriodo + (desvFlujoPeriodo * normInv(aleatorio, 0, 1));
        return res;
    }

    //MOSTRAR PROMEDIO TIR
    function mostrarPromedioTIR(promedioTIR) {
    let divPromedioTIR = document.getElementById('promedioTIR');
    if (divPromedioTIR) {
        let promedioTIRRedondeado = promedioTIR.toFixed(2);
        divPromedioTIR.textContent = `Promedio TIR: ${promedioTIRRedondeado}%`;
    }
}

    //CALCULO DE LA TIR PARA LA TABLA DE RESULTADOS
    function calcularTIR(flujos) {
        const epsilon = 1e-10; // Tolerancia para la convergencia
        const maxIteraciones = 100; // Número máximo de iteraciones permitidas

        let tir = 0.1; // Valor inicial de la TIR
        let tirPrev = 0.2; // Segundo valor inicial de la TIR
        let iteraciones = 0;

        // Método de la secante para encontrar la TIR
        while (Math.abs(tir - tirPrev) > epsilon && iteraciones < maxIteraciones) {
            let vp = 0; // Valor presente de los flujos de caja con la TIR actual

            for (let i = 0; i < flujos.length; i++) {
                vp += flujos[i] / Math.pow(1 + tir, i);
            }

            let vpDer = 0; // Valor presente derivado con la TIR previa
            
            for (let i = 0; i < flujos.length; i++) {
                vpDer += -i * flujos[i] / Math.pow(1 + tirPrev, i + 1);
            }

            let tirNext = tir - vp / vpDer; // Nueva estimación de la TIR

            tirPrev = tir; // Actualizar el valor previo de la TIR
            tir = tirNext; // Actualizar la TIR actual
            iteraciones++;
        }

        if (iteraciones === maxIteraciones) {
            throw new Error('No se pudo calcular la TIR en las iteraciones permitidas');
        }

        return tir * 100; // Devolver la TIR como porcentaje
    }
    //HASTA AQUIIIIIIII
    
    // Función para construir la tabla HTML con los resultados de la simulación
    function construirTabla(resultados) {
        let cuerpoTabla = document.getElementById('cuerpoTabla');
        cuerpoTabla.innerHTML = '';

        resultados.forEach(resultado => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${resultado.simulacion}</td>
                <td>${resultado.inversionInicial.toFixed(2)}</td>
                <td>${resultado.fnanio1.toFixed(2)}</td>
                <td>${resultado.fnanio2.toFixed(2)}</td>
                <td>${resultado.fnanio3.toFixed(2)}</td>
                <td>${resultado.fnanio4.toFixed(2)}</td>
                <td>${resultado.fnanio5.toFixed(2)}</td>
                <td>${resultado.tir.toFixed(2)}%</td>
            `;
            cuerpoTabla.appendChild(fila);
        });
    }
    //DISTRIBUCION NORMAL INVERSA POR EL METODO DE APROXIMACION
     // Función para calcular el inverso de la distribución normal estándar
     function normInv(p, mean, std) {
            if (p < 0 || p > 1) {
                throw new Error('Argumento fuera de rango');
            }
            if (std < 0) {
                throw new Error('La desviación estándar debe ser positiva');
            }

            // Constantes para las aproximaciones
            const a1 = -39.6968302866538;
            const a2 = 220.946098424521;
            const a3 = -275.928510446969;
            const a4 = 138.357751867269;
            const a5 = -30.6647980661472;
            const a6 = 2.50662827745924;

            const b1 = -54.4760987982241;
            const b2 = 161.585836858041;
            const b3 = -155.698979859887;
            const b4 = 66.8013118877197;
            const b5 = -13.2806815528857;

            const c1 = -0.00778489400243029;
            const c2 = -0.322396458041136;
            const c3 = -2.40075827716184;
            const c4 = -2.54973253934373;
            const c5 = 4.37466414146497;
            const c6 = 2.93816398269878;

            const d1 = 0.00778469570904146;
            const d2 = 0.32246712907004;
            const d3 = 2.445134137143;
            const d4 = 3.75440866190742;

            // Definir los rangos
            const pLow = 0.02425;
            const pHigh = 1 - pLow;

            let q, r;
            let retVal;

            // Calcular el valor inverso según el rango de p
            if (p < pLow) {
                q = Math.sqrt(-2 * Math.log(p));
                retVal =
                    (((((c1 * q + c2) * q + c3) * q + c4) * q + c5) * q + c6) /
                    ((((d1 * q + d2) * q + d3) * q + d4) * q + 1);
            } else if (p <= pHigh) {
                q = p - 0.5;
                r = q * q;
                retVal =
                    (((((a1 * r + a2) * r + a3) * r + a4) * r + a5) * r + a6) * q /
                    (((((b1 * r + b2) * r + b3) * r + b4) * r + b5) * r + 1);
            } else {
                q = Math.sqrt(-2 * Math.log(1 - p));
                retVal =
                    -(((((c1 * q + c2) * q + c3) * q + c4) * q + c5) * q + c6) /
                    ((((d1 * q + d2) * q + d3) * q + d4) * q + 1);
            }

            return mean + std * retVal;
        }
        //HASTA AQUI CALCULOS DE TABLA ----------------------------------------------------------------------------------------

    function calcularPromedioTIR(resultados) {
        if (resultados.length === 0) {
            return 0;
        }

        let sumaTIR = resultados.reduce((acumulador, resultado) => {
            return acumulador + resultado.tir;
        }, 0);

        let promedioTIR = sumaTIR / resultados.length;
        return promedioTIR;
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