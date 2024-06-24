<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <br>
        <br>
        <br>
        <div class="py-4 bg-gray-400 text-white">
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
                <p>
                    Una compañia desea entrar en un nuevo negocio cuya inversion inicial requerida y los ingresos netos anuales despues de impuestos estan distribuidos como sigue:
                </p>
                <p class="centrado">
                    <strong>Inversion inicial => N (u = 100000, desv = 5000)</strong>
                    <br>
                    <strong>Flujo neto del periodo => N (u = 30000, desv = 3000)</strong>
                </p>
                <p>
                    Si la administracion ha establecido que un proyecto de inversión sera emprendido si Prob{TIR>TREMA} >= 0.90 y la TREMA es de 30%, 
                    deberia la compañia X aceptar este nuevo proyecto de inversion? (Asuma un horizonte de planeacion de 5 años y un valor de rescate al termino de este tiempo cero).
                </p>
            </div>
            <div class="botonesEjercicio1 marginIzqDer">
                <div class="botonverhistorial">
                    <a href="{{ route('ejercicio4.historial') }}" class="btn btn-gradienthistorial">Ver historial</a>
                </div>
                <div class="botonSimular">
                    <a href="{{ route('ejercicio4.simular') }}" class="btn btn-gradientsimular">Simular</a>
                </div>
            </div>
        </div>




    </main>




    @push('js')




     <!-- Initialize Flatpickr -->
     <script type="module">




        </script>
    @endpush
</x-layout>
