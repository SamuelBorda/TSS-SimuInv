<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="py-4  bg-gray-400 text-white">
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
                <div class="text-justify">
                    <br>
                    <p>
                    Una compañía tiene un problema de mantenimiento con cierto equipo,
                        que contiene 4  componentes electrónicos idénticos que son la causa del mismo,
                        el cual consiste en que los  componentes fallan frecuentemente forzando a que el
                        equipo se desconecte mientras se hace la  reposición. Lo que se ha venido haciendo es
                        reemplazar los componentes solamente cuando se  descomponen. Sin embargo, existe una
                        nueva proposición de hacer el reemplazo de los cuatro  componentes cuando falle
                        cualesquiera de ellos, con objeto de reducir la frecuencia de desconexión  del equipo.
                        </p>

                    <p>
                    El tiempo de vida de un componente esta normalmente distribuido con media de 600 horas y
                    desviación estándar de 100 horas. También se sabe que es necesario desconectar el equipo
                    1 hora  si se reemplaza un componente y 2 horas si se reemplazan los 4. Un componente
                    nuevo cuesta $  200 y se incurren un costo de$100 por hora cada vez que se desconecta el equipo.
                    <br>
                    </p>
                    <p>
                    Determine cuál de las dos políticas anteriores es más económica
                    (Simule la operación del equipo  durante 20.000 horas).
                    </p>
                </div>
            </div>
            <div class="botonesEjercicio1 marginIzqDer">
                <div class="botonverhistorial">
                    <a href=" {{ route('ejercicio2.historial') }} " class="btn btn-gradienthistorial">Ver historial</a>
                </div>
                <div class="botonSimular">
                    <a href="{{ route('ejercicio2.simular') }}" class="btn btn-gradientsimular">Simular</a>
                </div>
            </div>
        </div>
    </main>
    @push('css')
        <style>
             .gradient-button {
                background: transparent;
                color: #EE7983;
                border: 1px solid #FFD700;
                border-radius: 30px;
                padding: 10px 15px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s ease, color 0.3s ease;
                margin-right: 25px;
            }
            .gradient-button3 {
                background: transparent;
                border: 1px solid white;
                border-radius: 30px;
                padding: 10px 65px;
                font-size: 15px;
                color: white;
                margin-left: 5px;
            }
            .gradient-button:hover{
                background: linear-gradient(to right, #FF4500, #FFD700);
                color: white;
            }
             .gradient-button2 {
                border: none;
                border-radius: 30px;
                padding: 10px 75px;
                font-size: 15px;
                background: linear-gradient(to right, #F6CA45, #EE7983);
            }
            .container-fluid {
                width: 100%;
                padding: 0 15px;
                margin-right: auto;
                margin-left: auto;
            }
            .button-group {
                display: flex;
                justify-content: flex-end;
                gap: 5px;
            }

            @media (max-width: 768px) {
                .gradient-button {
                    font-size: 14px;
                    padding: 8px 16px;
                }
            .text-justify {
                text-align: justify;
            }

            p {
                margin-bottom: 3rem;
            }
            .button-group {
                    flex-direction: column;
                    align-items: flex-end;
                }
        </style>
    @endpush

    @push('js')
        <!-- Initialize Flatpickr -->
        <script type="module">
            // Your JavaScript code here
        </script>
    @endpush
</x-layout>
