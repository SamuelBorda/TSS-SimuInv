<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="container-fluid py-4 bg-gray-400"> <!-- solo para el espacio --> <br>   </div>  

        <div class="container-fluid py-4 bg-dark-400 text-white">
            <h3 class="text-start ps-5">
                <span class="bg-gradient-simu px-4 py-2">
                    CASO 2 - MANTENIMIENTO DE EQUIPOS
                </span>
                <button type="button" class="gradient-button ms-10" onclick="window.location.href='{{ route('ejercicio2.ayuda') }}'">
                    <span class="d-none d-md-inline">¿Necesitas ayuda?</span>
                    <span class="d-inline d-md-none">
                        <i class="fas fa-question-circle"></i>
                    </span>
                </button>

            </h3>
        </div> 
        
        </main>

@push('js')




 <!-- Initialize Flatpickr -->
 <script type="module">




    </script>
@endpush
</x-layout>