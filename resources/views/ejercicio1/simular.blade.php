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
            <div class="marginIzqDer resolucionEjercicio1 text-white">
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
                                <th>Cantidad pedido</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla2">
                            <!-- Aquí se generará dinámicamente el contenido de la tabla -->
                        </tbody>
                    </table>
                </div>

                <!-- CODIGO PARA MOSTRAR EL GRAFICO -->
                <div class="grafico" style="margin-top:20px;">
                    <h3 class="text-Ayuda">GRAFICO DE RESULTADOS</h3>
                </div>

                <!-- CODIGO PARA MOSTRAR LOS RESULTADOS -->
                <div class="resultados">
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
                            La Politica 2 es mas económica y eficiente debido a su capacidad para reducir costos de mantenimiento, 
                            faltantes y mejorar la flexibilidad en la gestión del inventario. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        </main>

@push('js')
    <script>
        const n = 6;
        const theta = 0.5;
        const lambda = 3;
        let ventas = 0;
    // Función simular con los parámetros correctos y llenado de resultados
    function simular(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar) {
        let resultados = [];

        // Generar resultados para cada día
        for (let dia = 1; dia <= numeroDias; dia++) {
            // Aquí deberías calcular la demanda, ventas, inventario y compraAdicional según tu lógica
            let demanda = calcularDemanda();
            let inventario = inventarioInicial - ventas;
            let pedido = Math.max(0, 30 - inventario); // Ejemplo de compra adicional para mantener 30 artículos
            let cantidadPedido = Math.max(0, 10 - inventario); // Ejemplo de compra adicional para mantener 30 artículos

            resultados.push({
                dia: dia,
                demanda: demanda,
                ventas: ventas,
                inventario: inventario,
                pedido: pedido,
                cantidadPedido: cantidadPedido
            });
        }

        // Construir la tabla HTML con los resultados
        construirTabla(resultados);
    }
    function calcularDemanda(){
        // Generar un número aleatorio entre 0 y n para representar la cantidad demandada
        let cantidadDemanda = Math.floor(Math.random() * (n + 1));
    
        // Calcular la probabilidad binomial para este valor de cantidadDemanda
        let probabilidad = probabilidadBinomial(n, cantidadDemanda, theta);

        // Devolver la cantidad de demanda para este día
        ventas = cantidadDemanda;
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

    // Función para construir la tabla HTML con los resultados de la simulación
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
                <td>${resultado.cantidadPedido}</td>
            `;
            cuerpoTabla.appendChild(fila);
        });
    }

    // Evento al hacer clic en el botón Iniciar
    document.getElementById('btnIniciar1').addEventListener('click', function() {
        // Capturar los valores del formulario
        const numeroDias = parseFloat(document.getElementById('numdias').value);
        const inventarioInicial = parseFloat(document.getElementById('inventarioIni').value);
        const costoMantenimiento = parseFloat(document.getElementById('costoMantenimiento').value);
        const costoFaltante = parseFloat(document.getElementById('costoFaltante').value);
        const costoOrdenar = parseFloat(document.getElementById('costoOdernar').value);

        // Llamar a la función para simular y construir las tablas
        simular(numeroDias, inventarioInicial, costoMantenimiento, costoFaltante, costoOrdenar);
    });

    </script>
@endpush
</x-layout>