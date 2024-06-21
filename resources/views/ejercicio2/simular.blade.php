<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="container-fluid py-4 bg-gray-400"> <!-- solo para el espacio -->     </div>  

        <div class="container-fluid py-4 bg-dark-400 text-white">
            <h3 class="text-start ps-5">
                <span class="bg-gradient-simu px-4 py-2">
                    CASO 2 - MANTENIMIENTO DE EQUIPOS
                </span>
            </h3>
        </div>

        <div class="container-fluid py-4 bg-gray-400 text-white">
            <div class="row">
                    <div class="col-md-4">
                        <label for="simulationTime" class="text-white">Tiempo horas de simulación</label>
                        <input type="text" id="simulationTime" placeholder="Ingrese el tiempo en horas" class="form-control form-control-lg text-black">
                    </div>
                    <div class="col-md-4">
                        <label for="componentCost" class="text-white">Costo por componente</label>
                        <input type="text" id="componentCost" placeholder="Ingrese el costo por componente" class="form-control form-control-lg text-black">
                    </div>
                    <div class="col-md-4">
                        <label for="disconnectionCost" class="text-white">Costo por hora desconexión</label>
                        <input type="text" id="disconnectionCost"  placeholder="Ingrese el costo por hora de desconexión" class="form-control form-control-lg text-black">
                    </div>
            </div>
            <br>
           <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-gradientIniciar" id="btnIniciar" onclick="startSimulation()">Iniciar</button>
            </div>
        </div>

        <div class="container-fluid py-4 bg-gray-400 text-white">
            <p><strong>POLÍTICA 1 :</strong> Reemplazar los componentes solamente cuando se descomponen</p>
            <p><strong>POLÍTICA 2 :</strong> Reemplazar los cuatro componentes cuando falle cualquiera de ellos</p>
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
            color: black; /*El color del texto*/
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
        
    </style>
    @endpush

    @push('js')
    <script type="module">
        function startSimulation() {
            // Your simulation logic here
        }
    </script>
    @endpush
</x-layout>
