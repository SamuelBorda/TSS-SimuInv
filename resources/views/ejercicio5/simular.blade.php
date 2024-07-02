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
                <div class="formularioEjercicio1">
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="tituloInvIni">Inventario inicial</label>
                            <input type="number" class="form-control" id="inventarioIni" placeholder="Ingrese inventario inicial">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar">Costo de ordenar</label>
                            <input type="number" class="form-control" id="costoOdernar" placeholder="Ingrese costo de ordenar">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante">Costo inventario</label>
                            <input type="number" class="form-control" id="costoInventario" placeholder="Ingrese costo de Inventario">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="tituloCostoFalta">Costo de faltante</label>
                            <input type="number" class="form-control" id="costoFaltante" placeholder="Ingrese costo de faltante">
                        </div>
                        </div>
                     <div class="form-row">

                    </div>
                    <div class="form-row justify-content-end ">
                    <div class="botonGrafico col-md-6 text-end" style="display:none;">
                        <button type="button" class="btn  btn-gradientIniciar fw-bold" id="tablasbtn">Mostrar Tablas</button>
                    </div>
                    <div class="botonIniciar col-md-6 text-end">
                        <button type="button" class="btn btn-gradientIniciar" id="btnIniciar1">Iniciar</button>
                    </div>
                    </div>

                </div>
            </div>
            <div class="marginIzqDer resolucionEjercicio1 text-white" >
                <!-- POLITICA 1 -->
                <p>
                    <strong>Asuma que se trabajan 260 días en el año. </strong>
                </p>
                <!-- esto seria como la tabla simulacion -->
                <div class="tablaPolitica1 tablaSimulacion2" style="display:none; width:100%; overflow:auto;">
                    <table class="table table-bordered text-white" id="tablaResultados">
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Demanda</th>
                                <th>Inventario Inicial</th>
                                <th>Inventario Final</th>
                                <th>Pedido</th>
                                <th>Cantidad pedido</th>
                                <th>Tiempo entrega</th>
                                <th>Costo Inventario</th>
                                <th>Costo Faltante</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla">
                            <!-- Aquí se generará dinámicamente el contenido de la tabla -->
                        </tbody>
                    </table>
                </div>


                <!-- CODIGO PARA MOSTRAR EL GRAFICO -->

                <div class="graficossimu"  style="display:none;">
                <div class=" tituloGrafica " style="margin-top:20px;" >
                    <h3 class="text-Ayuda">GRAFICO DE RESULTADOS</h3>
                </div>
                <div class="grafica col-md-4 mx-auto">
                    <div id="graficoBarras" class="grafico" style="margin-top:20px; margin-bottom: 20px; height: 400px;"></div>
                </div>

                <!-- CODIGO PARA MOSTRAR LOS RESULTADOS -->
                <div class="resultados" style="margin-top:2rem;">

                        <div class="col-md-6">
                            <h3 class="text-Ayuda">RESULTADOS </h3>
                            <p>Demanda Anual : <span id="demandaAnual1"></span> productos</p>
                            <p>Numero de pedidos: <span id="numped1"></span> pedidos</p>
                            <p>Costo total ordenar: <span id="costoor1">$</span></p>
                            <p>Costo total inventario: <span id="costoin1">$</span></p>
                            <p>Costo de faltante: <span id="costofal1">$</span></p>
                            <p>COSTO TOTAL: <span id="costoTotal1">$</span></p>
                        </div>
                        <br>
                        <div class="col-md-6">

                            <p>Numero de ordenes por año : <span id="numoryear">$</span></p>
                            <p>Tiempo esperado entre ordenes: <span id="timeorden">$</span></p>
                            <p>Desv. estandar demanda: <span id="desdemanda">$</span></p>
                        </div>

                    <div class="row">
                        <h3 class="text-Ayuda">CONCLUSIÓN</h3>
                        <p id="conclusion">
                            <p>Cantidad optima a ordenar(Q): <span id="optQ"></span> unidades</p>
                            <p>Cantidad optima de reorden(R): <span id="optR"></span> unidades</p>
                        </p>
                    </div>
                </div>




                </div>

            </div>
        </div>

        </main>

@push('js')
<!-- Initialize Flatpickr -->

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>



var tablasestate=0;
        document.getElementById('tablasbtn').addEventListener('click', function () {

            if(tablasestate==0){

                this.textContent = 'Ocultar Tablas';

            document.querySelector('.tablaSimulacion2').style.display = 'block';
                    tablasestate=1;

            }else{

                this.textContent = 'Mostrar Tablas';

            document.querySelector('.tablaSimulacion2').style.display = 'none';
                tablasestate=0;
            }
          //  console.log(tablasestate);

        });




   const dem1 = [0, 1, 2, 3, 4, 5, 6,7,8];
    const prob1 = [0.04, 0.06, 0.10, 0.20, 0.30, 0.18, 0.08,0.03,0.01];



    const tiempoentrega = [1,2,3,4];
    const probtiempo = [0.25, 0.50, 0.20, 0.05];





    var cantoptimaReorden=0;

    var cantoptimaOrden=0;
    var desvestandarDemanda=0;
    var sumademanda= 0;
    var estaenpendido ="NO";
    var  costofinInv= 0;
    var  costofinFalta= 0;
    var cotot=0;





    // Función simular con los parámetros correctos y llenado de resultados
    function simular(numeroDias, inventarioInicial, costoFaltante, costoOdernar ,costoInventario ) {
        let resultados = [];
        let inventario = inventarioInicial;
        let inventarioFinal=[];
        let inventarioIn=[];
        let entregasPendientes = [];
        var costoinventariodiario=costoInventario/numeroDias;
          costofinInv= 0;
          costofinFalta=0;
        console.log("costoinventariodiario");
        console.log(costoinventariodiario);
        // Simulación de 30 días
        for (let dia = 1; dia <= numeroDias; dia++) {
                let demanda;
                    // Fase 1: Días 1-19 (Tabla dem1 y prob1)
                    demanda = simularDemanda(dem1, prob1);
                    demandasRestantes.push(demanda);
                }


                sumademanda = demandasRestantes.reduce((sum, value) => sum + value, 0);
                desvestandarDemanda = sumademanda/numeroDias;

                cantoptimaReorden =Math.ceil(desvestandarDemanda * 4);

                cantoptimaOrden =  Math.ceil(Math.sqrt((2 * costoOdernar * sumademanda) / costoInventario));
        console.log("Demanda");
        console.log(demandasRestantes);

        console.log("sumademanda");
        console.log(sumademanda);

        console.log("desvestandarDemanda");
        console.log(desvestandarDemanda);


        console.log("cantoptimaReorden");
        console.log(cantoptimaReorden);

        console.log("cantoptimaOrden");
        console.log(cantoptimaOrden);


        // Generar resultados para cada día


        for (let dia = 1; dia <= numeroDias; dia++) {
            // Procesar entregas pendientes
            entregasPendientes = entregasPendientes.map(entrega => {
                entrega.diasRestantes--;
                return entrega;
            }).filter(entrega => {
                if (entrega.diasRestantes <= 0) {
                    inventario += entrega.cantidad;
                    estaenpendido = "NO";
                    return false;
                }
                return true;
            });

            if(inventario>0){
                inventarioIn[dia]=inventario;
            }else{
                inventarioIn[dia]=0;
            }


            inventario -= demandasRestantes[dia-1];


            if(inventario>0){
                inventarioFinal[dia]=inventario;
            }else{
                inventarioFinal[dia]=0;
            }

            let demanda =demandasRestantes[dia-1];
            var costoinven= inventarioFinal[dia]*costoinventariodiario;
            costofinInv = costofinInv+costoinven;
            var costofalta = 0;
            if ( inventarioIn[dia] < demanda) {
                costofalta = ( demanda-inventarioIn[dia]  ) * 25;
            } else {
                costofalta = 0;
            }
            costofinFalta=costofinFalta+costofalta;

            let sumaDemandasRestantes = demandasRestantes.reduce((sum, value) => sum + value, 0);

            let pedido = sePide( inventarioIn[dia]);
            let tiempoEntrega = pedido === "SI" ? simularEntrega(tiempoentrega,probtiempo) : " ";
            let cantidadPedido = pedido === "SI"
            ?cantoptimaOrden
            : 0;

            if (pedido === "SI") {
                entregasPendientes.push({cantidad: cantidadPedido, diasRestantes: tiempoEntrega});
            }


            resultados.push({
                dia: dia,
                demanda: demanda,
                InventarioInicial:  inventarioIn[dia],
                InventarioFinal:  inventarioFinal[dia],
                pedido: pedido,
                cantidadPedido: cantidadPedido,
                tiempoEntrega: tiempoEntrega,
                costoInventario:costoinven ,
                costoFaltante :costofalta

            });
        }
            console.log("RESULTADOOO");
            console.log(resultados);


        // Construir la tabla HTML con los resultados
       construirTabla(resultados , costoOdernar);


       let totalPedido = resultados.reduce((total, resultado) => {
            if (resultado.pedido === "SI") {
                return total + 1;
            } else {
                return total;
            }
        }, 0);





        let costfinOrdenar =totalPedido * costoOdernar;

        let costotoal= costofinInv + costofinFalta + costfinOrdenar;
        cotot=costotoal;
        let numanio= sumademanda/cantoptimaOrden;
        let tiempoesperadoorden =  (cantoptimaOrden/sumademanda)*numeroDias;


        // Redondea hacia arriba
        let numanioRedondeado = Math.ceil(numanio);
        let tiempoesperadoordenRedondeado = Math.ceil(tiempoesperadoorden);


        // Asignamos los valores a los elementos en el HTML
        document.getElementById('demandaAnual1').textContent = `${sumademanda.toFixed(0)}`;
        document.getElementById('numped1').textContent = `${totalPedido.toFixed(0)}`;
        document.getElementById('costoor1').textContent = `$${costfinOrdenar.toFixed(2)}`;
        document.getElementById('costoin1').textContent = `$${costofinInv.toFixed(2)}`;
        document.getElementById('costofal1').textContent = `$${costofinFalta.toFixed(2)}`;
        document.getElementById('costoTotal1').textContent = `$${costotoal.toFixed(2)}`;

         // Asigna los valores redondeados a los elementos del HTML
        document.getElementById('numoryear').textContent = `${numanioRedondeado}`;
        document.getElementById('timeorden').textContent = `${tiempoesperadoordenRedondeado}`;
        document.getElementById('desdemanda').textContent = `${desvestandarDemanda.toFixed(2)}`;


        document.getElementById('optQ').textContent = `${cantoptimaOrden.toFixed(0)}`;
        document.getElementById('optR').textContent = `${cantoptimaReorden.toFixed(0)}`;



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




    function sePide(dia) {
        if (dia <= cantoptimaReorden) {
            if( estaenpendido=="NO"){
                estaenpendido ="SI";
                return "SI";

            }else{
                return "NO";

            }


        } else {
            return "NO";
        }


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



    function calcularDemanda() {
        // Generar un número aleatorio entre 0 y n para representar la cantidad demandada
        let cantidadDemanda = Math.floor(Math.random() * (n + 1));
        // Calcular la probabilidad binomial para este valor de cantidadDemanda
        let probabilidad = probabilidadBinomial(n, cantidadDemanda, theta);
        return probabilidad;
    }

// Función para construir la tabla HTML con los resultados de la simulación POLITICA 1
function construirTabla(resultados, costoOdernar) {
    let cuerpoTabla = document.getElementById('cuerpoTabla');
    cuerpoTabla.innerHTML = '';

    let sumademanda = 0;
    let costofinInv = 0;
    let costofinFalta = 0;

    resultados.forEach(resultado => {
        sumademanda += resultado.demanda; // Ajusta esto si quieres la suma de otro valor
        costofinInv += resultado.costoInventario; // Ajusta esto si quieres la suma de otro valor
        costofinFalta += resultado.costoFaltante; // Ajusta esto si quieres la suma de otro valor

        let fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${resultado.dia}</td>
            <td>${resultado.demanda}</td>
            <td>${resultado.InventarioInicial}</td>
            <td>${resultado.InventarioFinal}</td>
            <td>${resultado.pedido}</td>
            <td>${resultado.cantidadPedido}</td>
            <td>${resultado.tiempoEntrega}</td>
            <td>${resultado.costoInventario}</td>
            <td>${resultado.costoFaltante}</td>
        `;
        cuerpoTabla.appendChild(fila);
    });

    // Cuenta cuantos pedidos hay
    let totalPedido = resultados.reduce((total, resultado) => {
        return resultado.pedido === "SI" ? total + 1 : total;
    }, 0);

    let costfinOrdenar = totalPedido * costoOdernar;

    // Agregar fila de totales
    let filaTotales = document.createElement('tr');
    filaTotales.innerHTML = `
        <td><strong>Total pedidos</strong></td>
        <td colspan="3"><strong>${sumademanda}</strong></td>
        <td colspan="3"><strong>${totalPedido}</strong></td>
        <td><strong>${costofinInv}</strong></td>
        <td><strong>${costofinFalta}</strong></td>
    `;
    cuerpoTabla.appendChild(filaTotales);

    // Agregar fila de costo total
    let filaTotales2 = document.createElement('tr');
    let costotoal = costofinInv + costofinFalta + costfinOrdenar;
    filaTotales2.innerHTML = `
        <td><strong>Costo Total</strong></td>
        <td colspan="8"><strong>${costotoal}</strong></td>
    `;
    cuerpoTabla.appendChild(filaTotales2);
}






    // Código JavaScript para mostrar el gráfico de barras
    function compararYPintarGrafico() {
            // Datos para el gráfico de barras
            let datos = {
                x: ['Q ', 'R'],
                y: [cantoptimaOrden, cantoptimaReorden],
                type: 'bar'
            };
            // Configuración del layout del gráfico
            let layout = {
                title: 'Valor Q y R',
                xaxis: {
                    title: 'Cantidad Optima'
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
              // Capturar los valores del formulario
              demandasRestantes = [];
            const inventarioIni = parseFloat(document.getElementById('inventarioIni').value);
            const costoOdernar = parseFloat(document.getElementById('costoOdernar').value);
            const costoFaltante = parseFloat(document.getElementById('costoFaltante').value);
            const costoInventario = parseFloat(document.getElementById('costoInventario').value);
            const cantidadDias = 260;

       //     document.querySelector('.botonGrafico').style.display = 'block';


        // Validar que los campos número de días e inventario inicial sean enteros
        if (!Number.isInteger(parseFloat(inventarioIni)) ) {
            alert('Por favor, ingrese un valor entero en  el campo de Inventario Inicial.');
            return;
        }

        // Validar que los campos no estén vacíos y sean números válidos
        if (isNaN(inventarioIni) || isNaN(costoOdernar) || isNaN(costoFaltante) || isNaN(costoInventario) ) {
            alert('Por favor, rellene los campos faltantes.');
            return;
        }
            // Validar que todos los valores sean positivos
        if (inventarioIni <= 0 || costoOdernar < 0 || costoFaltante < 0 || costoInventario < 0 ) {
            alert('Por favor, ingrese valores positivos.');
            return;
        }


       //document.querySelector('.graficossimu').style.display = 'block';
            // Realizar la simulación y construir dinámicamente la tabla
            simular(cantidadDias, inventarioIni, costoFaltante, costoOdernar, costoInventario);
            document.querySelector('.botonGrafico').style.display = 'block';

            document.querySelector('.graficossimu').style.display = 'block';


      //  comparar();
       compararYPintarGrafico();
       historialAñadir();
    });

// Función para calcular distribución acumulada
function calcularAcumulada(probabilidades) {
    let acumulada = [];
    let sum = 0;
    for (let i = 0; i < probabilidades.length; i++) {
        sum += probabilidades[i];
        acumulada.push(sum);
    }
    return acumulada;
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

// Función para simular la demanda según los datos y probabilidades proporcionadas
function simularEntrega(demandaArray, probabilidadArray) {
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




//para actualizar en tiempo real
function historialAñadir() {


    const Ininic = parseFloat(document.getElementById('inventarioIni').value);
    const CostoDeOrdenar = parseFloat(document.getElementById('costoOdernar').value);
    const CostoDeInventario = parseFloat(document.getElementById('costoInventario').value);
    const CostoDeFaltante = parseFloat(document.getElementById('costoFaltante').value);


    console.log("AHHHHHHH");


    fetch("{{ route('ejercicio5.actualizarEjercicio5') }}", { // Aquí faltaba cerrar el paréntesis de route()
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({

        InventarioInicial: Ininic,
        CostoDeOrdenar: CostoDeOrdenar,
        CostoDeInventario: CostoDeInventario,
        CostoDeFaltante: CostoDeFaltante,
        PoliticaQ: cantoptimaOrden,
        PoliticaR:cantoptimaReorden,
        CostoTotal: cotot,

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
