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
        <div class="py-4  bg-gray-400">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 2 - MANTENIMIENTO DE EQUIPOS
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href="{{ route('ejercicio2.ayuda') }}" class="btn btn-gradient-outline">
                        <span class="small-screen"style="font-size:1rem;">?</span>
                        <span class="large-screen">¿Necesitas ayuda?</span>
                    </a>
                </div>
            </div>

            <div class="enunciadoEjercicio marginIzqDer">
                <div class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="simulationTime" class="text-white">Tiempo horas de simulación</label>
                            <input type="number" id="simulationTime" placeholder="Ingrese el tiempo en horas" class="form-control form-control-lg text-black">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="componentCost" class="text-white">Costo por componente</label>
                            <input type="number" id="componentCost" placeholder="Ingrese el costo por componente" class="form-control form-control-lg text-black">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="disconnectionCost" class="text-white">Costo por hora desconexión</label>
                            <input type="number" id="disconnectionCost" placeholder="Ingrese el costo por hora de desconexión" class="form-control form-control-lg text-black">
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-gradientIniciar" id="btnIniciar">Iniciar</button>
                    </div>
                </div>
            </div>

        <div class="marginIzqDer resolucionEjercicio1 text-white">
            <p><strong>POLÍTICA 1 :</strong> Reemplazar los componentes solamente cuando se descomponen</p>
            <p><strong>POLÍTICA 2 :</strong> Reemplazar los cuatro componentes cuando falle cualquiera de ellos</p>
            <br>
            <h3 class="text-Ayuda">GRÁFICO DE RESULTADOS</h3>

        <div class="container-fluid py-4 bg-gray-400 text-white">
            <div class="canvas-container bg-gray-400 text-white">
                <canvas id="cajaGrafico" width="400" height="200"></canvas>
        </div>
        <div class="canvas-container bg-gray-400 text-white">
            <canvas id="scatterPlot" width="400" height="200"></canvas>
        </div>
            </div>

            <div id="result" class="container-fluid py-4 bg-gray-400 text-white"></div>
        </div>

    </main>

    @push('css')
    <style>
        .col-md-4 {
            color: white;
        }
        .form-control {
            border: 1px solid white;
            background-color: white;
            color: black;
        }
        .form-control:focus {
            background-color: white;
            border-color: white;
            outline: none;
            box-shadow: none;
        }

        .form-control-lg {
            font-size: 1.25rem;
            padding: .5rem 1rem;
            border-radius: .3rem;
        }
        .container-fluid {
            width: 100%;
            padding: 0 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .btn-gradientIniciar {
            padding: 7px 60px;
            cursor: pointer;
            font-size: 17px;
        }
        .texto-simu2 {
            margin-left: 1%;
            color: #00F0FF;
        }
        .policy-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /*Distribuir políticas uniformemente*/
            margin-bottom: 10px; /*Espacio inferior entre las políticas y la conclusión*/
            flex-wrap: wrap;
            justify-content: space-around; /* Distribuir políticas uniformemente */
            margin-bottom: 10px; /* Espacio inferior entre las políticas y la conclusión */
            margin-left: 7%;
        }

        .policy {
            flex: 1 1 300px; /*Ancho mínimo de las políticas*/
            padding: 10px;
            margin: 0 5px; /*Espacio entre las políticas*/
            box-sizing: border-box; /*Incluir el padding y border en el ancho*/
        }

        .policy h3 {
            margin-top: 0; /*Eliminar margen superior del título*/
        }

        .texto-politica, .conclusion {
            color: #00F0FF;
        }

        .texto-conclusion {
            margin-left: 7%;
        }

        .canvas-container {
            display: block; /* Mostrar cada contenedor de canvas como bloque */
            margin: 20px auto; /* Centrar horizontalmente y agregar un margen vertical */
            width: 80%; /*Ajustar ancho */
            background-color: #258FBB; /*Cambiar color de fondo del contenedor */
        }

        #cajaGrafico, #scatterPlot {
            display: block;
            width: 100%;  /*Ajustar ancho al 100% */
            height: auto;  /*Dejar que el alto se ajuste automáticamente */
        }

    </style>
    @endpush

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module">
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('btnIniciar').addEventListener('click', startSimulation);
        });

        let cajaGrafico;  //Variable global para almacenar el gráfico de barras
        let scatterPlot;  //Variable global para almacenar el gráfico de dispersión
        var resultadopolitica="Politica 1";
        var costo1=0;
        var costo2=0;

        function normalRandom() {
            let u = 0, v = 0;
            while (u === 0) u = Math.random();
            while (v === 0) v = Math.random();
            return Math.sqrt(-2.0 * Math.log(u)) * Math.cos(2.0 * Math.PI * v);
        }

        function simularPolitica(simulationTime, componentCost, disconnectionCost, policy) {
            let costoTotal = 0;
            let numReemplazos = 0;
            let componentLives = [];
            let tiempoTotalSimu = 0;
            let lifeTimes = [];
            let enRangoTiempoVida = []; //Tiempos de vida dentro del rango

            if (policy === 1) {
                for (let i = 0; i < 4; i++) {
                    componentLives.push(600 + 100 * normalRandom());
                }
                while (simulationTime > 0) {
                    let minLife = Math.min(...componentLives);
                    if (minLife > simulationTime) {
                        tiempoTotalSimu += simulationTime;
                        break;
                    }

                    simulationTime -= minLife;
                    tiempoTotalSimu += minLife;

                    //agregar el tiempo de vida a un conjunto
                    if (minLife <= 500 || minLife >= 700) {
                        costoTotal += componentCost + disconnectionCost;
                        numReemplazos++;
                        lifeTimes.push(minLife); //Tiempos de vida fuera de rango
                    } else {
                        enRangoTiempoVida.push(minLife);//Tiempos de vida dentro de rango
                    }

                    let index = componentLives.indexOf(minLife);
                    componentLives[index] = 600 + 100 * normalRandom();
                }
            } else {
                while (simulationTime > 0) {
                    let minLife = 600 + 100 * normalRandom();
                    if (minLife > simulationTime) {
                        tiempoTotalSimu += simulationTime;
                        break;
                    }

                    simulationTime -= minLife;
                    tiempoTotalSimu += minLife;

                    // Agregar tiempo de vida al conjunto correspondiente
                    if (minLife < 500 || minLife > 700) {
                        costoTotal += 4 * componentCost + 2 * disconnectionCost;
                        numReemplazos++;
                        lifeTimes.push(minLife); //Tiempos de vida fuera de rango
                    } else {
                        enRangoTiempoVida.push(minLife); // iempos de vida dentro de rango
                    }
                }
            }

            return { costoTotal, numReemplazos, tiempoTotalSimu, lifeTimes, enRangoTiempoVida };
        }
//grafico de barras
        function drawBarChart(policy1Data, policy2Data) {
            const ctx = document.getElementById('cajaGrafico').getContext('2d');

            // Destruir el gráfico anterior si existe
            if (cajaGrafico) {
                cajaGrafico.destroy();
            }

            cajaGrafico = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Política 1', 'Política 2'],
                    datasets: [{
                        label: 'Costo Total',
                        data: [policy1Data.costoTotal, policy2Data.costoTotal],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            grid: {
                                color: '#3A5C6B' //Color de la cuadrícula del eje Y
                            },
                            ticks: {
                                color: '#FFFFFF' //Color de los números del eje Y
                            }
                        },
                        x: {
                            grid: {
                                color: '#3A5C6B' //Color de la cuadrícula del eje X
                            },
                            ticks: {
                                color: '#FFFFFF' //Color de los números del eje X
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `Costo: ${context.raw.toFixed(2)}$`;
                                }
                            }
                        }
                    }
                }
            });
        }
//grafico de dispersion
        function drawScatterPlot(policy1Data, policy2Data) {
            const ctx = document.getElementById('scatterPlot').getContext('2d');

            //Convertir datos a puntos para el gráfico de dispersión
            const policy1Points = [
                ...policy1Data.lifeTimes.map((time, index) => ({ x: index, y: time, inRange: false })),
                ...policy1Data.enRangoTiempoVida.map((time, index) => ({ x: policy1Data.lifeTimes.length + index, y: time, inRange: true }))
            ];
            const policy2Points = [
                ...policy2Data.lifeTimes.map((time, index) => ({ x: index, y: time, inRange: false })),
                ...policy2Data.enRangoTiempoVida.map((time, index) => ({ x: policy2Data.lifeTimes.length + index, y: time, inRange: true }))
            ];

            //Destruir el gráfico anterior si existe
            if (scatterPlot) {
                scatterPlot.destroy();
            }

            scatterPlot = new Chart(ctx, {
                type: 'scatter',
                data: {
                    datasets: [
                        {
                            label: 'Tiempo de vida P1 - Fuera de Rango',
                            data: policy1Points.filter(point => !point.inRange),
                            backgroundColor: 'rgba(255, 99, 132, 0.6)',
                            borderColor: 'rgba(255, 99, 132, 1)'
                        },
                        {
                            label: 'Tiempo de vida P1 - Dentro de Rango',
                            data: policy1Points.filter(point => point.inRange),
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)'
                        },
                        {
                            label: 'Tiempo de vida P2 - Fuera de Rango',
                            data: policy2Points.filter(point => !point.inRange),
                            backgroundColor: 'rgba(255, 159, 64, 0.6)',
                            borderColor: 'rgba(255, 159, 64, 1)'
                        },
                        {
                            label: 'Tiempo de vida P2 - Dentro de Rango',
                            data: policy2Points.filter(point => point.inRange),
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)'
                        }
                    ]
                },
                options: {
                    scales: {
                        x: {
                            grid: {
                                color: '#3A5C6B' //Color de la cuadrícula del eje X
                            },
                            ticks: {
                                color: '#FFFFFF' //Color de los números del eje X
                            },
                            title: {
                                display: true,
                                text: 'Reemplazos',
                                color: '#FFFFFF'
                            }
                        },
                        y: {
                            grid: {
                                color: '#3A5C6B' //Color de la cuadrícula del eje Y
                            },
                            ticks: {
                                color: '#FFFFFF' //Color de los números del eje Y
                            },
                            title: {
                                display: true,
                                text: 'Tiempo de vida (horas)',
                                color: '#FFFFFF'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#FFFFFF' //Color de las etiquetas
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `Tiempo de vida: ${context.raw.y.toFixed(2)} horas`;
                                }
                            }
                        }
                    }
                }
            });
        }

        function mostrarResultado(policy1Data, policy2Data) {
            const resultDiv = document.getElementById('result');

            let conclusionMessage;
            costo1=policy1Data.costoTotal;
            costo2=policy2Data.costoTotal;
            if (policy1Data.costoTotal < policy2Data.costoTotal) {
                resultadopolitica="Politica 1";
                conclusionMessage = `<p>La Política 1 es más económica y eficiente debido a su capacidad para minimizar los costos operativos totales y aumentar la fiabilidad del equipo.</p>`;
            } else {
                resultadopolitica ="Politica 2";
                conclusionMessage = `<p>La Política 2 es más económica y eficiente debido a su capacidad para minimizar los costos operativos totales y aumentar la fiabilidad del equipo.</p>`;
            }

            resultDiv.innerHTML = `
                <div class="policy-container">
                    <div class="policy">
                        <h3 class="texto-politica">POLITICA 1</h3>
                        <p>Tiempo de horas simuladas: ${policy1Data.tiempoTotalSimu.toFixed(2)}</p>
                        <p>Número de cambios: ${policy1Data.numReemplazos}</p>
                        <p>COSTO TOTAL: ${policy1Data.costoTotal.toFixed(2)}$</p>
                    </div>
                    <div class="policy">
                        <h3 class="texto-politica">POLITICA 2</h3>
                        <p>Tiempo de horas simuladas: ${policy2Data.tiempoTotalSimu.toFixed(2)}</p>
                        <p>Número de cambios: ${policy2Data.numReemplazos}</p>
                        <p>COSTO TOTAL: ${policy2Data.costoTotal.toFixed(2)}$</p>
                    </div>
                </div>
                <div class="texto-conclusion">
                    <h3 class="conclusion">CONCLUSIÓN</h3>
                    ${conclusionMessage}
                </div>
            `;
        }

        function startSimulation() {
            const simulationTime = parseInt(document.getElementById('simulationTime').value);
            const componentCost = parseInt(document.getElementById('componentCost').value);
            const disconnectionCost = parseInt(document.getElementById('disconnectionCost').value);

            //Depurar: Valores de entrada
            console.log(`Tiempo de simulacion: ${simulationTime}`);
            console.log(`Costo por componente: ${componentCost}`);
            console.log(`Costo de desconexión: ${disconnectionCost}`);

            //Verificar si las entradas son válidas
            if (isNaN(simulationTime) || isNaN(componentCost) || isNaN(disconnectionCost)) {
                alert('Por favor, ingrese datos a los campos faltantes.');
                return;
            }

            if (simulationTime <= 0 || componentCost < 0 || disconnectionCost < 0 ) {
            alert('Por favor, ingrese valores positivos.');
            return;
        }

            const policy1Data = simularPolitica(simulationTime, componentCost, disconnectionCost, 1);
            const policy2Data = simularPolitica(simulationTime, componentCost, disconnectionCost, 2);

            //Depuración: imprimir resultados de simulación
            console.log('Datos generados politica 1:', policy1Data);
            console.log('Datos generados politica 2:', policy2Data);

            drawBarChart(policy1Data, policy2Data);
            drawScatterPlot(policy1Data,policy2Data);
            mostrarResultado(policy1Data, policy2Data);
            historialAñadir();
        }



        //para actualizar en tiempo real
        function historialAñadir() {


            const TiempoHorasSimulacion = parseFloat(document.getElementById('simulationTime').value);
            const CostoPorComponente = parseFloat(document.getElementById('componentCost').value);
            const CostoPorHoraDesconexion = parseFloat(document.getElementById('disconnectionCost').value);


            console.log("AHHHHHHH");

            console.log(costo1);
            console.log(costo2);
            console.log(resultadopolitica);
            console.log(TiempoHorasSimulacion);
            console.log(CostoPorComponente);
            console.log(CostoPorHoraDesconexion);
            fetch("{{ route('ejercicio2.actualizarEjercicio2') }}", { // Aquí faltaba cerrar el paréntesis de route()
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({

                TiempoHorasSimulacion: TiempoHorasSimulacion,
                CostoPorComponente: CostoPorComponente,
                CostoPorHoraDesconexion: CostoPorHoraDesconexion,
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
