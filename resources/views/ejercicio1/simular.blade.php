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
                    <a href="{{ route('ejercicio1.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <div class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloNumDias">Número de días</label>
                            <input type="number" class="form-control" id="numdias" placeholder="Ingrese número de días">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni">Inventario inicial</label>
                            <input type="number" class="form-control" id="inventarioIni" placeholder="Ingrese inventario inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante">Costo de mantenimiento</label>
                            <input type="number" class="form-control" id="costoMantenimiento" placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta">Costo de faltante</label>
                            <input type="number" class="form-control" id="costoFaltante" placeholder="Ingrese costo de faltante">
                        </div>
                        </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar">Costo de ordenar</label>
                            <input type="number" class="form-control" id="costoOdernar" placeholder="Ingrese costo de ordenar">
                        </div>
                    </div>
                    <div class="botonIniciar">
                        <button type="button" class="btn btn-gradientIniciar" id="btnIniciar1">Iniciar</button>
                    </div>
                </div>
            </div>
            <div class="marginIzqDer resolucionEjercicio1 text-white" style="display:none;">
                <!-- POLITICA 1 -->
                <p>
                    <strong>Politica 1: </strong> Ordenar cada 8 dias hasta tener 30 articulos en inventario
                </p>
                <!-- esto seria como la tabla simulacion -->
                <div class="tablaPolitica1" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white" id="tablaResultados">
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Demanda</th>
                                <th>Vendido</th>
                                <th>Inventario</th>
                                <th>Pedido</th>
                                <th>Tiempo entrega</th>
                                <th>Cantidad pedido</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla">
                            <!-- Aquí se generará dinámicamente el contenido de la tabla -->
                        </tbody>
                    </table>
                </div>
                <!-- POLITICA 2 -->
                <p>
                    <strong>Politica 2: </strong> Ordenar hasta tener 30 articulos cuando el nivel de inventario sea menor o igual a 10
                </p>
                <div class="tablaPolitica2" style="width:100%; overflow:auto;">
                    <table class="table table-bordered text-white" id="tablaResultados2">
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Demanda</th>
                                <th>Vendido</th>
                                <th>Inventario</th>
                                <th>Pedido</th>
                                <th>Tiempo entrega</th>
                                <th>Cantidad pedido</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla2">
                            <!-- Aquí se generará dinámicamente el contenido de la tabla -->
                        </tbody>
                    </table>
                </div>

                <!-- CODIGO PARA MOSTRAR EL GRAFICO -->
                <div class="tituloGrafica" style="margin-top:20px;">
                    <h3 class="text-Ayuda">GRAFICO DE RESULTADOS</h3>
                </div>
                <div class="grafica col-md-4 mx-auto">
                    <div id="graficoBarras" class="grafico" style="margin-top:20px; margin-bottom: 20px; height: 400px;"></div>
                </div>

                <!-- CODIGO PARA MOSTRAR LOS RESULTADOS -->
                <div class="resultados" style="margin-top:2rem;">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-Ayuda">COSTOS POLÍTICA 1</h3>
                            <p>Costo total de mantenimiento : <span id="costoMantenimiento1">$</span></p>
                            <p>Costo total de ordenar: <span id="costoOrdenar1">$</span></p>
                            <p>Costo total de faltante: <span id="costoFaltante1">$</span></p>
                            <p>COSTO TOTAL: <span id="costoTotal1">$</span></p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-Ayuda">COSTOS POLÍTICA 2</h3>
                            <p>Costo total de mantenimiento : <span id="costoMantenimiento2">$</span></p>
                            <p>Costo total de ordenar: <span id="costoOrdenar2">$</span></p>
                            <p>Costo total de faltante: <span id="costoFaltante2">$</span></p>
                            <p>COSTO TOTAL: <span id="costoTotal2">$</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="text-Ayuda">CONCLUSIÓN</h3>
                        <p id="conclusion">
                            La Politica <span id="mejorPolitica"></span>es mas económica y eficiente debido a su capacidad para reducir costos de mantenimiento,
                            faltantes y mejorar la flexibilidad en la gestión del inventario.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        </main>

@push('js')
<!-- Initialize Flatpickr -->

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
    const n = 6;
    const theta = 0.5;
    const lambda = 3;
    let distribucionBin = []; // Aquí se almacenarán los valores de la distribución de probabilidad binomial
    let distribucionAcumBin = []; // Aquí se almacenarán los valores acumulados de la distribución binomial
    let distribucionPoisson = []; //Aqui se almacenarán los valores del tiempo de entrega con distribucion poisson
    let politicaUno = 0;
    let politicaDos = 0;
    var resultadopolitica="Politica 1";
    // Función simular con los parámetros correctos y llenado de resultados
    function simular(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar) {
        let resultados = [];
        let inventario = inventarioInicial;
        let entregasPendientes = [];

        calcularDistribucionBinomial();
        poissonAcumulado();

        // Generar resultados para cada día
        for (let dia = 1; dia <= numeroDias; dia++) {
            // Procesar entregas pendientes
            entregasPendientes = entregasPendientes.map(entrega => {
                entrega.diasRestantes--;
                return entrega;
            }).filter(entrega => {
                if (entrega.diasRestantes <= 0) {
                    inventario += entrega.cantidad;
                    return false;
                }
                return true;
            });

            let demanda = calcularDemanda();
            let ventas = calcularVentas(demanda);
            inventario -= ventas;

            let pedido = sePide(dia);
            let tiempoEntrega = pedido === "SI" ? calcularTiempoEntrega() : " ";
            let cantidadPedido = pedido === "SI" ? 30 - inventario : 0;

            if (pedido === "SI") {
                entregasPendientes.push({cantidad: cantidadPedido, diasRestantes: tiempoEntrega});
            }

            resultados.push({
                dia: dia,
                demanda: demanda,
                ventas: ventas,
                inventario: inventario,
                pedido: pedido,
                tiempoEntrega: tiempoEntrega,
                cantidadPedido: cantidadPedido
            });
        }
        // Construir la tabla HTML con los resultados
        construirTabla(resultados);

        // Calculamos los costos totales
        let costoTotalMantenimiento = resultados.reduce((total, resultado) => total + (resultado.inventario || 0), 0) + resultados[0].ventas * costoMantenimiento;
        let costoTotalOrdenar =  resultados.reduce((total, resultado) => resultado.pedido === "SI" ? total + costoOrdenar : total, 0);
        let totalVendido = resultados.reduce((total, resultado) => total + resultado.ventas, 0);
        let totalInventario = resultados.reduce((total, resultado) => total + resultado.inventario, 0) + resultados[0].ventas;
        let totalFaltante = totalVendido > totalInventario ? totalVendido - totalInventario: 0;
        let costoTotalFaltante = totalFaltante * costoFaltante;
        let costoTotal = costoTotalMantenimiento + costoTotalOrdenar + costoTotalFaltante;

        politicaUno = costoTotal;

        // Asignamos los valores a los elementos en el HTML
        document.getElementById('costoMantenimiento1').textContent = `$${costoTotalMantenimiento.toFixed(2)}`;
        document.getElementById('costoOrdenar1').textContent = `$${costoTotalOrdenar.toFixed(2)}`;
        document.getElementById('costoFaltante1').textContent = `$${costoTotalFaltante.toFixed(2)}`;
        document.getElementById('costoTotal1').textContent = `$${costoTotal.toFixed(2)}`;
    }

    function calcularTiempoEntrega() {
        let esMenor = true;
        let cont = 0;
        let randomValue = Math.random();
        while (esMenor) {
            if (randomValue < distribucionPoisson[cont]) {
                return cont;
            } else {
                cont++;
            }
        }
    }

    function poissonAcumulado() {
        let k = 8;
        for (let i = 0; i <= k; i++) {
            distribucionPoisson.push(poissonProbabiliadAcumulada(lambda, i));
        }
    }
    // Función para calcular el factorial de un número
    function factorial(n) {
        if (n === 0 || n === 1) {
            return 1;
        }
        let result = 1;
        for (let i = n; i > 1; i--) {
            result *= i;
        }
        return result;
    }
    // Función para calcular la probabilidad de Poisson
    function poissonProbabilidad(lambda, k) {
        return Math.pow(lambda, k) * Math.exp(-lambda) / factorial(k);
    }
    // Función para calcular la probabilidad acumulada de Poisson
    function poissonProbabiliadAcumulada(lambda, k) {
        let probabilidadAcumulada = 0;
        for (let i = 0; i <= k; i++) {
            probabilidadAcumulada += poissonProbabilidad(lambda, i);
        }
        return probabilidadAcumulada;
    }

    function sePide(dia) {
        return dia % 8 === 0 ? "SI" : "NO";
    }

    function calcularVentas(demanda) {
        let ventas = 0;
        let esMenor = true;
        let cont = 0;
        while (esMenor) {
            if (demanda < distribucionAcumBin[cont]) {
                ventas = cont;
                esMenor = false;
            } else {
                cont++;
            }
        }
        return ventas;
    }

    function calcularDistribucionBinomial() {
        // Calcular los valores para k desde 0 hasta n
        for (let k = 0; k <= n; k++) {
            const probabilidad = probabilidadBinomial(n, k, theta);
            distribucionBin.push(probabilidad);
            // Calcular acumulado hasta el valor actual de k
            if (k === 0) {
                distribucionAcumBin.push(probabilidad);
            } else {
                let acumuladoAnterior = distribucionAcumBin[k - 1];
                distribucionAcumBin.push(acumuladoAnterior + probabilidad);
            }
        }
    }

    function calcularDemanda() {
        // Generar un número aleatorio entre 0 y n para representar la cantidad demandada
        let cantidadDemanda = Math.floor(Math.random() * (n + 1));
        // Calcular la probabilidad binomial para este valor de cantidadDemanda
        let probabilidad = probabilidadBinomial(n, cantidadDemanda, theta);
        return probabilidad;
    }
    // Función para calcular la probabilidad usando la distribución binomial
    function probabilidadBinomial(n, k, theta) {
        const coefBinomial = binomialCoefficient(n, k);
        const probabilidad = coefBinomial * Math.pow(theta, k) * Math.pow(1 - theta, n - k);
        return probabilidad;
    }
    // Función para calcular el coeficiente binomial (n sobre k)
    function binomialCoefficient(n, k) {
        if (k === 0 || k === n) {
            return 1;
        }
        let numerator = 1;
        let denominator = 1;
        for (let i = 1; i <= k; i++) {
            numerator *= (n - i + 1);
            denominator *= i;
        }
        return numerator / denominator;
    }
    // Función para construir la tabla HTML con los resultados de la simulación POLITICA 1
    function construirTabla(resultados) {
        let cuerpoTabla = document.getElementById('cuerpoTabla');
        cuerpoTabla.innerHTML = '';

        resultados.forEach(resultado => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${resultado.dia}</td>
                <td>${resultado.demanda}</td>
                <td>${resultado.ventas}</td>
                <td>${resultado.inventario}</td>
                <td>${resultado.pedido}</td>
                <td>${resultado.tiempoEntrega}</td>
                <td>${resultado.cantidadPedido}</td>
            `;
            cuerpoTabla.appendChild(fila);
        });
        //cuenta cuantos pedidos hay
        let totalPedido = resultados.reduce((total, resultado) => {
            if (resultado.pedido === "SI") {
                return total + 1;
            } else {
                return total;
            }
        }, 0);

        // Agregar fila de totales
        let filaTotales = document.createElement('tr');
        filaTotales.innerHTML = `
            <td colspan="4"><strong>Total pedidos</strong></td>
            <td><strong>${totalPedido}</strong></td>
            <td><strong></strong></td>
            <td><strong></strong></td>
        `;
        cuerpoTabla.appendChild(filaTotales);
    }

    // Función para construir la tabla HTML con los resultados de la simulación POLITICA 2
    function construirTabla2(resultados) {
        let cuerpoTabla = document.getElementById('cuerpoTabla2');
        cuerpoTabla.innerHTML = '';

        resultados.forEach(resultado => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${resultado.dia}</td>
                <td>${resultado.demanda}</td>
                <td>${resultado.ventas}</td>
                <td>${resultado.inventario}</td>
                <td>${resultado.pedido}</td>
                <td>${resultado.tiempoEntrega}</td>
                <td>${resultado.cantidadPedido}</td>
            `;
            cuerpoTabla.appendChild(fila);
        });
        //cuenta cuantos pedidos hay
        let totalPedido = resultados.reduce((total, resultado) => {
            if (resultado.pedido === "SI") {
                return total + 1;
            } else {
                return total;
            }
        }, 0);

        // Agregar fila de totales
        let filaTotales = document.createElement('tr');
        filaTotales.innerHTML = `
            <td colspan="4"><strong>Total pedidos</strong></td>
            <td><strong>${totalPedido}</strong></td>
            <td><strong></strong></td>
            <td><strong></strong></td>
        `;
        cuerpoTabla.appendChild(filaTotales);
    }

    function sePide2(inventario, entregasPendientes) {
        let pide = "NO";
        if(inventario <= 10 && entregasPendientes.length === 0) {
            pide = "SI";
        } else {
            pide = "NO";
        }
        return pide;
    }

    // FUNCION PARA SIMULAR LOS VALORES DE LA POLITICA 2
    function simular2(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar) {
        let resultados = [];
        let inventario = inventarioInicial;
        let entregasPendientes = [];

        calcularDistribucionBinomial();
        poissonAcumulado();

        // Generar resultados para cada día
        for (let dia = 1; dia <= numeroDias; dia++) {
            // Procesar entregas pendientes
            entregasPendientes = entregasPendientes.map(entrega => {
                entrega.diasRestantes--;
                return entrega;
            }).filter(entrega => {
                if (entrega.diasRestantes <= 0) {
                    inventario += entrega.cantidad;
                    return false;
                }
                return true;
            });

            let demanda = calcularDemanda();
            let ventas = calcularVentas(demanda);
            inventario -= ventas;

            let pedido = sePide2(inventario, entregasPendientes);
            let tiempoEntrega = pedido === "SI" ? calcularTiempoEntrega() : " ";
            let cantidadPedido = pedido === "SI" ? 20 - inventario : 0;

            if (pedido === "SI") {
                entregasPendientes.push({cantidad: cantidadPedido, diasRestantes: tiempoEntrega});
            }

            resultados.push({
                dia: dia,
                demanda: demanda,
                ventas: ventas,
                inventario: inventario,
                pedido: pedido,
                tiempoEntrega: tiempoEntrega,
                cantidadPedido: cantidadPedido
            });
        }
        // Construir la tabla HTML con los resultados
        construirTabla2(resultados);
        // Calculamos los costos totales
        let costoTotalMantenimiento = resultados.reduce((total, resultado) => total + (resultado.inventario || 0), 0) + resultados[0].ventas * costoMantenimiento;
        let costoTotalOrdenar =  resultados.reduce((total, resultado) => resultado.pedido === "SI" ? total + costoOrdenar : total, 0);
        let totalVendido = resultados.reduce((total, resultado) => total + resultado.ventas, 0);
        let totalInventario = resultados.reduce((total, resultado) => total + resultado.inventario, 0) + resultados[0].ventas;
        let totalFaltante = totalVendido > totalInventario ? totalVendido - totalInventario: 0;
        let costoTotalFaltante = totalFaltante * costoFaltante;
        let costoTotal = costoTotalMantenimiento + costoTotalOrdenar + costoTotalFaltante;

        politicaDos = costoTotal;

        // Asignamos los valores a los elementos en el HTML
        document.getElementById('costoMantenimiento2').textContent = `$${costoTotalMantenimiento.toFixed(2)}`;
        document.getElementById('costoOrdenar2').textContent = `$${costoTotalOrdenar.toFixed(2)}`;
        document.getElementById('costoFaltante2').textContent = `$${costoTotalFaltante.toFixed(2)}`;
        document.getElementById('costoTotal2').textContent = `$${costoTotal.toFixed(2)}`;
    }
    //COMPARA QUE POLITICA ES MEJOR
    function comparar(){
        let mejor = 0;
        if(politicaUno>politicaDos){
            mejor = 2;
            resultadopolitica ="Politica 2";
            document.getElementById('mejorPolitica').textContent = `${mejor} `;
        }else{
            resultadopolitica ="Politica 1";
            mejor = 1;
            document.getElementById('mejorPolitica').textContent = `${mejor} `;
        }
    }

    // Código JavaScript para mostrar el gráfico de barras
    function compararYPintarGrafico() {
            // Datos para el gráfico de barras
            let datos = {
                x: ['Política Uno', 'Política Dos'],
                y: [politicaUno, politicaDos],
                type: 'bar'
            };
            // Configuración del layout del gráfico
            let layout = {
                title: 'Comparación de Políticas',
                xaxis: {
                    title: 'Políticas'
                },
                yaxis: {
                    title: 'Resultados'
                },
                // Ajuste de tamaño del gráfico
                height: 400 // Altura en píxeles
            };
            // Crear el gráfico con Plotly
            Plotly.newPlot('graficoBarras', [datos], layout);
    }

    // Evento al hacer clic en el botón Iniciar
    document.getElementById('btnIniciar1').addEventListener('click', function() {




        const numeroDias = parseFloat(document.getElementById('numdias').value);
        const inventarioInicial = parseFloat(document.getElementById('inventarioIni').value);
        const costoMantenimiento = parseFloat(document.getElementById('costoMantenimiento').value);
        const costoFaltante = parseFloat(document.getElementById('costoFaltante').value);
        const costoOrdenar = parseFloat(document.getElementById('costoOdernar').value);



        // Convertir los valores a enteros
        const numeroDiasInt = parseInt(numeroDias);
                const inventarioInicialInt = parseInt(inventarioInicial);

                // Validar que número de días no sea mayor a 30
                if (numeroDiasInt > 30) {
                    alert('El número de días no debe ser mayor a 30.');
                    return;
                }


        // Validar que los campos número de días e inventario inicial sean enteros
        if (!Number.isInteger(parseFloat(numeroDias)) || !Number.isInteger(parseFloat(inventarioInicial))) {
            alert('Por favor, ingrese valores enteros para Número de días e Inventario inicial.');
            return;
        }




        // Validar que los campos no estén vacíos y sean números válidos
        if (isNaN(numeroDiasInt) || isNaN(inventarioInicialInt) || isNaN(costoMantenimiento) || isNaN(costoFaltante) || isNaN(costoOrdenar)) {
            alert('Por favor, rellene los campos faltantes.');
            return;
        }
            // Validar que todos los valores sean positivos
        if (numeroDiasInt <= 0 || inventarioInicialInt < 0 || costoMantenimiento < 0 || costoFaltante < 0 || costoOrdenar < 0) {
            alert('Por favor, ingrese valores positivos.');
            return;
        }

              // Mostrar el contenido al hacer clic en el botón Iniciar
        document.querySelector('.resolucionEjercicio1').style.display = 'block';

        // Llamar a la función para simular y construir las tablas para la POLITICA 1
        simular(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar);
        //SIMULAR POLITICA 2
        simular2(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar);
        comparar();
        compararYPintarGrafico();
        historialAñadir();
    });




//para actualizar en tiempo real
function historialAñadir() {
    const contenido1 = document.getElementById('costoTotal1').textContent;
    const nume1 = contenido1.match(/\d+(\.\d+)?/); // Esto obtiene cualquier secuencia de dígitos seguida opcionalmente por un punto y más dígitos
    const costo1 = parseFloat(nume1[0]); // Convertir el número extraído a punto flotante

    const contenido2 = document.getElementById('costoTotal2').textContent;
    const nume2= contenido2.match(/\d+(\.\d+)?/); // Esto obtiene cualquier secuencia de dígitos seguida opcionalmente por un punto y más dígitos
    const costo2 = parseFloat(nume2[0]); // Convertir el número extraído a punto flotante

    const costofaltante = parseFloat(document.getElementById('costoFaltante').value);
    const costoordenar = parseFloat(document.getElementById('costoOdernar').value);
    const costomantenimiento = parseFloat(document.getElementById('costoMantenimiento').value);
    const inventario = parseFloat(document.getElementById('inventarioIni').value);
    const numerodias = parseFloat(document.getElementById('numdias').value);


    console.log("AHHHHHHH");
    console.log(costo1);
    console.log(costo2);
    console.log(costofaltante);
    console.log(costoordenar);
    console.log(costomantenimiento);
    console.log(inventario);
    console.log(numerodias);
    console.log(resultadopolitica);

    fetch("{{ route('ejercicio1.actualizarEjercicio1') }}", { // Aquí faltaba cerrar el paréntesis de route()
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({

        NumeroDias: numerodias,
        Inventario: inventario,
        Costomantenimiento: costomantenimiento,
        Costoordenar: costoordenar,
        Costofaltante: costofaltante,
        costo1: costo1,
        costo2: costo2,
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
