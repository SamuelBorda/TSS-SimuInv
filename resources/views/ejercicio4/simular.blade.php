<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
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
                        CASO 4 - EVALUACION DE UN PROYECTO DE INVERSION
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href="{{ route('ejercicio4.ayuda') }}" class="btn btn-gradient-outline">¿Necesitas ayuda?</a>
                </div>    
            </div>
            <div class="formAjustado">
                <form>
                    <label class="formlabelblanco"><Strong>Numero de simulaciones</Strong></label>
                    <input type="text">
                    <label class="formlabelblanco"><Strong>TREMA (%)</Strong></label>
                    <input type="text">
                    <label class="formlabelblanco"><Strong>Aceptacion de proyecto (%)</Strong></label>
                    <input type="text">
                </form>
            </div>
        </div>
        
    </main>

@push('js')




 <!-- Initialize Flatpickr -->
 <script type="module">




    </script>
@endpush
</x-layout>