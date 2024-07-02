
<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <br>
        <br>
        <br>
        <div class="py-4 bg-gray-400">
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
                <div class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloNumDias" class="text-white fw-bold">Cantidad de compra inicial</label>
                            <input  type="number" class="form-control form-control-lg" id="numdias"
                                placeholder="Ingrese numero de compra inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni" class="text-white fw-bold">Costo de compra inicial</label>
                            <input  type="number" class="form-control form-control-lg" id="inventarioIni"
                                placeholder="Ingrese el costo de compra inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante" class="text-white fw-bold">Costo de venta al público</label>
                            <input type="number" class="form-control form-control-lg" id="costoMantenimiento"
                                placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta" class="text-white fw-bold">Costo de compra adicional</label>
                            <input  type="number" class="form-control form-control-lg" id="costoFaltante"
                                placeholder="Ingrese costo de compra adicional">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución inicial</label>
                            <input  type="number" class="form-control form-control-lg" id="costoOrdenarInicial"
                                placeholder="Ingrese costo de devolucion inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución final</label>
                            <input  type="number" class="form-control form-control-lg" id="costoOrdenarFinal"
                                placeholder="Ingrese costo de devolucion final">
                        </div>
                    </div>
                    <div class="row justify-content-end ">
                    <div class="botonGrafico col-md-6 text-end" style="display:none;">
                        <button type="button" class="btn  btn-gradientIniciar fw-bold" id="tablasbtn">Mostrar Tablas</button>
                    </div>
                    <div class="botonIniciar col-md-6 text-end">
                        <button type="button" class="btn btn-gradientIniciar fw-bold" id="btnIniciar"  >Iniciar</button>
                    </div>


                    </div>

                </div>
            </div>

            <div class="container">
    <div class="tablaSimulacion mt-5" style="display:none; width:100%; overflow:auto">
        <h2 class="text-white text-center">POLITICA 1</h2>
        <table class="table table-bordered mt-3 text-white mx-auto" id="tablaResultados">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Demanda</th>
                    <th>Ventas</th>
                    <th>Inventario</th>
                    <th>Compra adicional</th>
                    <th>Ingresos</th>
                    <th>Devolución</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla">
                <!-- Aquí se generará dinámicamente el contenido de la tabla -->
            </tbody>
        </table>
    </div>

    <div class="tablaSimulacion2 mt-5"  style="display:none; width:100%; overflow:auto;">
        <h2 class="text-white text-center" >POLITICA 2</h2>
        <table class="table table-bordered mt-3 text-white mx-auto" id="tablaResultados2">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Demanda</th>
                    <th>Ventas</th>
                    <th>Inventario</th>
                    <th>Compra adicional</th>
                    <th>Ingresos</th>
                    <th>Devolución</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla2">
                <!-- Aquí se generará dinámicamente el contenido de la tabla -->
            </tbody>
        </table>
    </div>
</div>

<div class="graficossimu container py-4 text-white text-center" style="display:none;">
    <h2 class="text-simu2" >GRAFICOS RESULTADOS</h2>

    <div class="row">
        <div class="col-md-4 mx-auto">
            <div id="grafico-politica1"></div>
        </div>
        <div class="col-md-4 mx-auto">
            <div id="grafico-politica2"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="text-simu2">POLÍTICA 1</h2>
            <p>Costo de compra inicial: <span id="costo-inicial1"></span></p>
            <p>Costo de compra adicional: <span id="costo-adicional1"></span></p>
            <p>Costo devolución: <span id="costo-devolucion1"></span></p>
            <p>Costo total: <span id="costo-total1"></span></p>
            <p>Ingreso total: <span id="ingreso-total1"></span></p>
            <p>GANANCIA TOTAL: <span id="ganancia-total1"></span></p>
        </div>
        <div class="col-md-6 mx-auto">
            <h2 class="text-simu2">POLÍTICA 2</h2>
            <p>Costo de compra inicial: <span id="costo-inicial2"></span></p>
            <p>Costo de compra adicional: <span id="costo-adicional2"></span></p>
            <p>Costo devolución: <span id="costo-devolucion2"></span></p>
            <p>Costo total: <span id="costo-total2"></span></p>
            <p>Ingreso total: <span id="ingreso-total2"></span></p>
            <p>GANANCIA TOTAL: <span id="ganancia-total2"></span></p>
        </div>
    </div>

    <div>
        <h2 class="text-simu2"> CONCLUSION: </h2>
        <p class="conclusion-text"></p>
    </div>
</div>

        </div>
    </main>

@push('js')



 <!-- Initialize Flatpickr -->

 <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
 <script >
  const dem1 = [5, 6, 7, 8, 9, 10, 11];
    const prob1 = [0.05, 0.05, 0.10, 0.15, 0.25, 0.25, 0.15];

    const dem2 = [4, 5, 6, 7, 8];
    const prob2 = [0.10, 0.20, 0.30, 0.25, 0.15];
    var resultadopolitica = "Politica 1" ;
    var ganan1 = 0;
    var ganan2 =  0;
// Variables para almacenar las demandas del día 11 al día 30
let demandasRestantes = [];

    document.getElementById('btnIniciar').addEventListener('click', function () {
            // Capturar los valores del formulario
            demandasRestantes = [];
            const cantidadCompraInicial = parseFloat(document.getElementById('numdias').value);
            const costoCompraInicial = parseFloat(document.getElementById('inventarioIni').value);
            const costoVentaPublico = parseFloat(document.getElementById('costoMantenimiento').value);
            const costoCompraAdicional = parseFloat(document.getElementById('costoFaltante').value);
            const costoDevolucionInicial = parseFloat(document.getElementById('costoOrdenarInicial').value);
            const costoDevolucionFinal = parseFloat(document.getElementById('costoOrdenarFinal').value);




                // Validar que los campos número de días e inventario inicial sean enteros
                if (!Number.isInteger(parseFloat(cantidadCompraInicial))) {
                    alert('Por favor, ingrese valores enteros para  el campo de Cantidad de compra Inicial.');
                    return;
                }

                // Validar que los campos no estén vacíos y sean números válidos
                if (isNaN(cantidadCompraInicial) || isNaN(costoCompraInicial) || isNaN(costoVentaPublico) || isNaN(costoCompraAdicional) || isNaN(costoDevolucionInicial)|| isNaN(costoDevolucionFinal)) {
                    alert('Por favor, rellene los campos faltantes.');
                    return;
                }
                    // Validar que todos los valores sean positivos
                if (cantidadCompraInicial <= 0 || costoCompraInicial < 0 || costoVentaPublico < 0 || costoCompraAdicional < 0 || costoDevolucionInicial < 0|| costoDevolucionFinal < 0) {
                    alert('Por favor, ingrese valores positivos.');
                    return;
                }


            document.querySelector('.botonGrafico').style.display = 'block';

            document.querySelector('.graficossimu').style.display = 'block';
            // Realizar la simulación y construir dinámicamente la tabla
            simularYConstruirTabla(cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal);

            historialAñadir();

        });

        var tablasestate=0;
        document.getElementById('tablasbtn').addEventListener('click', function () {

            if(tablasestate==0){
                document.querySelector('.tablaSimulacion').style.display = 'block';
                this.textContent = 'Ocultar Tablas';

            document.querySelector('.tablaSimulacion2').style.display = 'block';
                    tablasestate=1;

            }else{
                document.querySelector('.tablaSimulacion').style.display = 'none';
                this.textContent = 'Mostrar Tablas';

            document.querySelector('.tablaSimulacion2').style.display = 'none';
                tablasestate=0;
            }
          //  console.log(tablasestate);

        });






// Función para simular y construir la tabla
function simularYConstruirTabla(cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal) {
    let inventario = cantidadCompraInicial;
    let inventario2 = cantidadCompraInicial;
    let ingresosTotales = 0;
    let resultados = [];
    let resultados2 = [];
    let sicompra = false;
    // Simulación de 30 días
    for (let dia = 1; dia <= 30; dia++) {
        let demanda;

        if (dia <= 10) {
            // Fase 1: Días 1-19 (Tabla dem1 y prob1)
            demanda = simularDemanda(dem1, prob1);

        } else if (dia <= 30) {
            // Fase 2: Días 20-30 (Tabla dem2 y prob2)
            demanda = simularDemanda(dem2, prob2);

            // Almacenar demanda para el ajuste del día 10


            }

            demandasRestantes.push(demanda);
        }


        for (let dia = 1; dia <= 30; dia++) {
            let  ventas, ingresos, compraAdicional, devolucion;




            ventas = Math.min(inventario, demandasRestantes[dia-1]);
            ingresos = ventas * costoVentaPublico;
            ingresosTotales += ingresos;
            inventario -= ventas;


        // Realizar compra adicional o devolución en el día 10
        if (dia === 10) {
            const demandaRestante = calcularDemandaRestante(demandasRestantes);
            //console.log("demandasRestantes");
            //console.log(demandasRestantes);
            //console.log(demandaRestante);
            if (inventario < demandaRestante) {
                compraAdicional = demandaRestante - inventario;
                inventario += compraAdicional;
            } else if (inventario > demandaRestante) {
                devolucion = inventario - demandaRestante;
                ingresosTotales -= devolucion * costoDevolucionInicial;
                inventario = demandaRestante; // Ajustar inventario al demandaRestante
            }
        }
        resultados.push({
            dia: dia,
            demanda: demandasRestantes[dia-1],
            ventas: ventas,
            inventario: inventario,
            compraAdicional: compraAdicional,
            ingresos: ingresos,
            devolucion: devolucion
        });

    }

    //Politica 2

    for (let dia = 1; dia <= 30; dia++) {
            let  ventas, ingresos, compraAdicional, devolucion;


            ventas = Math.min(inventario2, demandasRestantes[dia-1]);
            ingresos = ventas * costoVentaPublico;
            ingresosTotales += ingresos;
            inventario2 -= ventas;

            if (dia === 10) {
                const demandaRestante = calcularDemandaRestante(demandasRestantes,cantidadCompraInicial);
           // console.log("demandasRestantes");
            //console.log(demandasRestantes);
            //console.log(demandaRestante);

                if (inventario2 < demandaRestante) {
                compraAdicional = demandaRestante - inventario2;
                inventario2 += compraAdicional;
                sicompra=true;
            }


            }


        // Realizar compra adicional o devolución en el día 10
        if (dia === 30 && sicompra==false) {
            const demandaRestante = calcularDemandaRestante2(demandasRestantes,cantidadCompraInicial);
           // console.log("demandasRestantes");
            //console.log(demandasRestantes);
            //console.log(demandaRestante);



                devolucion = demandaRestante;
                ingresosTotales -= devolucion * costoDevolucionFinal;
                inventario2 = demandaRestante -devolucion; // Ajustar inventario al demandaRestante



        }
        resultados2.push({
            dia: dia,
            demanda: demandasRestantes[dia-1],
            ventas: ventas,
            inventario: inventario2,
            compraAdicional: compraAdicional,
            ingresos: ingresos,
            devolucion: devolucion
        });

    }

        let totalInventario1 = cantidadCompraInicial * costoCompraInicial;
        let totalAdicional1 = costoCompraAdicional * resultados.reduce((total, resultado) => total + (resultado.compraAdicional || 0), 0);
        let totalIngresos1 = resultados.reduce((total, resultado) => total + (resultado.ingresos || 0), 0);
        let totalDevolucion1 = resultados.reduce((total, resultado) => total + (resultado.devolucion || 0), 0) * costoDevolucionInicial;
        let costoTotal1 = totalInventario1 - totalDevolucion1 +totalAdicional1;
        let gananciaTotal1 = totalIngresos1 - costoTotal1;

        let totalInventario2 = cantidadCompraInicial * costoCompraInicial;
        let totalAdicional2 = costoCompraAdicional * resultados.reduce((total, resultado2) => total + (resultado2.compraAdicional || 0), 0);
        let totalIngresos2 = resultados2.reduce((total, resultado) => total + (resultado.ingresos || 0), 0);
        let totalDevolucion2 = resultados2.reduce((total, resultado) => total + (resultado.devolucion || 0), 0) * costoDevolucionFinal;
        let costoTotal2 = totalInventario2 - totalDevolucion2 +totalAdicional2;
        let gananciaTotal2 = totalIngresos2 - costoTotal2;



    // Construir la tabla HTML final con los resultados completos
    construirTabla(resultados,cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal);
    construirTabla2(resultados2,cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal);
    //console.log(resultados);
    //console.log(resultados2);
     // Dibujar los gráficos
     dibujarGraficos(costoTotal1, totalIngresos1,totalAdicional1, gananciaTotal1,totalDevolucion1,totalInventario1, costoTotal2, totalIngresos2, gananciaTotal2 ,totalDevolucion2,totalInventario2,totalAdicional2 );
}

// Función para simular la demanda según los datos y probabilidades proporcionadas
function simularDemanda(demandaArray, probabilidadArray) {
    let rand = Math.random();
    let cumulativeProbability = 0;

    for (let i = 0; i < demandaArray.length; i++) {
        cumulativeProbability += probabilidadArray[i];
        if (rand < cumulativeProbability) {
            return demandaArray[i];
        }
    }

    return demandaArray[demandaArray.length - 1]; // En caso extremo
}

// Función para calcular la demanda restante del día 11 al día 30
function calcularDemandaRestante(demandasRestantes) {
    let demandaRestante = 0;

    for (let i = 10; i < demandasRestantes.length; i++) {
        demandaRestante += demandasRestantes[i];
    }

    return demandaRestante;
}
function calcularDemandaRestante2(demandasRestant,cantidadCompraInicial) {
    let demandaRestante = 0;

    for (let i = 0; i < demandasRestant.length; i++) {
        demandaRestante += demandasRestant[i];
    }

    return cantidadCompraInicial-demandaRestante ;
}

// Función para construir la tabla HTML con los resultados de la simulación
function construirTabla(resultados, cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal) {
    let cuerpoTabla = document.getElementById('cuerpoTabla');
    cuerpoTabla.innerHTML = '';

    resultados.forEach(resultado => {
        let fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${resultado.dia}</td>
            <td>${resultado.demanda}</td>
            <td>${resultado.ventas || ''}</td>
            <td>${resultado.inventario || ''}</td>
            <td>${resultado.compraAdicional || ''}</td>
            <td>${resultado.ingresos.toFixed(2) || ''}</td>
            <td>${resultado.devolucion || ''}</td>
        `;
        cuerpoTabla.appendChild(fila);
    });

    // Calcular totales
    let totalDemanda = resultados.reduce((total, resultado) => total + (resultado.demanda || 0), 0);
    let totalInventario = cantidadCompraInicial * costoCompraInicial;
    let totalIngresos = resultados.reduce((total, resultado) => total + (resultado.ingresos || 0), 0);
    let totalCompraAdicional = resultados.reduce((total, resultado) => total + (resultado.compraAdicional || 0), 0) * costoCompraAdicional;
    let totalDevolucion = resultados.reduce((total, resultado) => total + (resultado.devolucion || 0), 0) * costoDevolucionInicial;

    // Agregar fila de totales
    let filaTotales = document.createElement('tr');
    filaTotales.innerHTML = `
        <td colspan="2"><strong>Total</strong></td>
        <td><strong>${totalDemanda}</strong></td>
        <td><strong>${totalInventario}</strong></td>
        <td><strong>${totalCompraAdicional}</strong></td>
        <td><strong>${totalIngresos.toFixed(2)}</strong></td>
        <td><strong>${totalDevolucion}</strong></td>
    `;
    cuerpoTabla.appendChild(filaTotales);
}


// Función para construir la tabla HTML con los resultados de la simulación
function construirTabla2(resultados, cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal) {
    let cuerpoTabla = document.getElementById('cuerpoTabla2');
    cuerpoTabla.innerHTML = '';

    resultados.forEach(resultado => {
        let fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${resultado.dia}</td>
            <td>${resultado.demanda}</td>
            <td>${resultado.ventas || ''}</td>
            <td>${resultado.inventario || ''}</td>
            <td>${resultado.compraAdicional || ''}</td>
            <td>${resultado.ingresos.toFixed(2) || ''}</td>
            <td>${resultado.devolucion || ''}</td>
        `;
        cuerpoTabla.appendChild(fila);
    });

    // Calcular totales
    let totalDemanda = resultados.reduce((total, resultado) => total + (resultado.demanda || 0), 0);
    let totalInventario = cantidadCompraInicial * costoCompraInicial;
    let totalIngresos = resultados.reduce((total, resultado) => total + (resultado.ingresos || 0), 0);
    let totalCompraAdicional = resultados.reduce((total, resultado) => total + (resultado.compraAdicional || 0), 0) * costoCompraAdicional;
    let totalDevolucion = resultados.reduce((total, resultado) => total + (resultado.devolucion || 0), 0) * costoDevolucionFinal;

    // Agregar fila de totales
    let filaTotales = document.createElement('tr');
    filaTotales.innerHTML = `
        <td colspan="2"><strong>Total</strong></td>
        <td><strong>${totalDemanda}</strong></td>
        <td><strong>${totalInventario}</strong></td>
        <td><strong>${totalCompraAdicional}</strong></td>
        <td><strong>${totalIngresos.toFixed(2)}</strong></td>
        <td><strong>${totalDevolucion}</strong></td>
    `;
    cuerpoTabla.appendChild(filaTotales);
}

function dibujarGraficos(costoTotal1, totalIngresos1,totalAdicional1, gananciaTotal1,totalDevolucion1,totalInventario1, costoTotal2, totalIngresos2, gananciaTotal2 ,totalDevolucion2,totalInventario2,totalAdicional2) {
    // Datos para el primer conjunto de barras (Política 1)
    const labels1 = ['Costo Total', 'Ingreso Total', 'Ganancia Total'];
    const data1 = [costoTotal1, totalIngresos1, gananciaTotal1];

    // Datos para el segundo conjunto de barras (Política 2)
    const labels2 = ['Costo Total', 'Ingreso Total', 'Ganancia Total'];
    const data2 = [costoTotal2, totalIngresos2, gananciaTotal2];

    // Configuración de los trazos para el primer gráfico (Política 1)
    const trace1 = {
        x: labels1,
        y: data1,
        name: 'Política 1',
        type: 'bar',
        marker: {
            color: ['#1b20f9', '#ff0000', '#ffff00'] // Azul, Naranja, Verde
        }
    };

    // Configuración del layout del primer gráfico
    const layout1 = {
        title: 'Política 1',
        xaxis: {
            title: 'Concepto'
        },
        yaxis: {
            title: 'Valor'
        }
    };

    // Configuración de los trazos para el segundo gráfico (Política 2)
    const trace2 = {
        x: labels2,
        y: data2,
        name: 'Política 2',
        type: 'bar',
        marker: {
            color: ['#1b20f9', '#ff0000', '#ffff00'] // Azul, Naranja, Amarillo
        }
    };

    // Configuración del layout del segundo gráfico
    const layout2 = {
        title: 'Política 2',
        xaxis: {
            title: 'Concepto'
        },
        yaxis: {
            title: 'Valor'
        }
    };

    // Renderizar los gráficos utilizando Plotly
    Plotly.newPlot('grafico-politica1', [trace1], layout1);
    Plotly.newPlot('grafico-politica2', [trace2], layout2);

    document.getElementById('costo-inicial1').textContent = costoTotal1.toFixed(2);
        document.getElementById('costo-adicional1').textContent = totalAdicional1.toFixed(2);
        document.getElementById('costo-devolucion1').textContent = totalDevolucion1.toFixed(2);
        document.getElementById('costo-total1').textContent = costoTotal1.toFixed(2);
        document.getElementById('ingreso-total1').textContent = totalIngresos1.toFixed(2);
        document.getElementById('ganancia-total1').textContent = gananciaTotal1.toFixed(2);

        document.getElementById('costo-inicial2').textContent = costoTotal2.toFixed(2);
        document.getElementById('costo-adicional2').textContent = totalAdicional2.toFixed(2);
        document.getElementById('costo-devolucion2').textContent = totalDevolucion2.toFixed(2);
        document.getElementById('costo-total2').textContent = costoTotal2.toFixed(2);
        document.getElementById('ingreso-total2').textContent = totalIngresos2.toFixed(2);
        document.getElementById('ganancia-total2').textContent = gananciaTotal2.toFixed(2);


        const conclusion = document.querySelector('.conclusion-text');
        if (gananciaTotal1 > gananciaTotal2) {
            resultadopolitica="Politica 1";
            conclusion.textContent = "La Política 1 es la más eficiente debido a que maximiza las ganancias durante el mes, aprovechando las oportunidades de compra y devolución más favorables.";
        } else {
            resultadopolitica = "Politica 2";
            conclusion.textContent = "La Política 2 es la más eficiente debido a que maximiza las ganancias durante el mes, aprovechando las oportunidades de compra y devolución más favorables.";
        }


    }




//para actualizar en tiempo real
function historialAñadir() {
    const ganancia2 =parseFloat( document.getElementById('ganancia-total2').textContent);
    const ganancia1 =parseFloat(document.getElementById('ganancia-total1').textContent);
    const cantidadCompraInicial = parseFloat(document.getElementById('numdias').value);
    const costoCompraInicial = parseFloat(document.getElementById('inventarioIni').value);
    const costoVentaPublico = parseFloat(document.getElementById('costoMantenimiento').value);
    const costoCompraAdicional = parseFloat(document.getElementById('costoFaltante').value);
    const costoDevolucionInicial = parseFloat(document.getElementById('costoOrdenarInicial').value);
    const costoDevolucionFinal = parseFloat(document.getElementById('costoOrdenarFinal').value);



    console.log("AHHHHHHH");
    console.log(ganancia2);
    console.log(resultadopolitica);
    console.log(costoDevolucionFinal);
    fetch("{{ route('ejercicio3.actualizarEjercicio3') }}", { // Aquí faltaba cerrar el paréntesis de route()
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({
        Cantidadcomprainicial: cantidadCompraInicial,
        Costocomprainicial: costoCompraInicial,
        Costoventa: costoVentaPublico,
        Costocompraadicional: costoCompraAdicional,
        Costodevolucioninicial: costoDevolucionInicial,
        Costodevolucionfinal: costoDevolucionFinal,
        Costopolitica1: ganancia1,
        Costopolitica2: ganancia2,
        Mejoropcion: resultadopolitica,
    })
})
.then(response => response.json())
.then(data => {
    console.log('Success:', data);
    alert(data.message); // Notificar al usuario

})
.catch(error => {
    console.error('Error:', error);
    alert('Error actualizando el dato : ' + error.message);

});
}




    </script>

@endpush
</x-layout>
