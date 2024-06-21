
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
                    <a href="{{ route('ejercicio1.ayuda') }}" class="btn btn-gradient-outline">¿Necesitas ayuda?</a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <div class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloNumDias" class="text-white fw-bold">Cantidad de compra inicial</label>
                            <input type="text" class="form-control" id="numdias"
                                placeholder="Ingrese numero de compra inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni" class="text-white fw-bold">Costo de compra inicial</label>
                            <input type="text" class="form-control" id="inventarioIni"
                                placeholder="Ingrese el costo de compra inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante" class="text-white fw-bold">Costo de venta al público</label>
                            <input type="text" class="form-control" id="costoMantenimiento"
                                placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta" class="text-white fw-bold">Costo de compra adicional</label>
                            <input type="text" class="form-control" id="costoFaltante"
                                placeholder="Ingrese costo de compra adicional">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución inicial</label>
                            <input type="text" class="form-control" id="costoOrdenarInicial"
                                placeholder="Ingrese costo de devolucion inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución final</label>
                            <input type="text" class="form-control" id="costoOrdenarFinal"
                                placeholder="Ingrese costo de devolucion final">
                        </div>
                    </div>
                    <div class="botonIniciar">
                        <button type="button" class="btn btn-gradientIniciar" id="btnIniciar">Iniciar</button>
                    </div>
                </div>
            </div>
            <div class="tablaSimulacion mt-5">
                <h2 class="text-white">POLITICA 1</h2>
                <table class="table table-bordered mt-3  text-white" id="tablaResultados">
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


            <div class="tablaSimulacion2 mt-5">
                <h2 class="text-white">POLITICA 2</h2>
                <table class="table table-bordered mt-3  text-white" id="tablaResultados2">
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
    </main>

@push('js')



 <!-- Initialize Flatpickr -->
 <script >
  const dem1 = [5, 6, 7, 8, 9, 10, 11];
    const prob1 = [0.05, 0.05, 0.10, 0.15, 0.25, 0.25, 0.15];

    const dem2 = [4, 5, 6, 7, 8];
    const prob2 = [0.10, 0.20, 0.30, 0.25, 0.15];

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

            // Realizar la simulación y construir dinámicamente la tabla
            simularYConstruirTabla(cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal);
        });




// Función para simular y construir la tabla
function simularYConstruirTabla(cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal) {
    let inventario = cantidadCompraInicial;
    let ingresosTotales = 0;
    let resultados = [];

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
            console.log("demandasRestantes");
            console.log(demandasRestantes);
            console.log(demandaRestante);
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

    // Construir la tabla HTML final con los resultados completos
    construirTabla(resultados,cantidadCompraInicial, costoCompraInicial, costoVentaPublico, costoCompraAdicional, costoDevolucionInicial, costoDevolucionFinal);
    console.log(resultados);
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
    </script>

@endpush
</x-layout>
