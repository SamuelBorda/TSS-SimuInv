<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="container-fluid py-4  bg-gray-400 text-white">
            <div class="panelTitulo">
                <h3 class="bg-gradient-titleejercicio">
                    CASO 1: COMPARACIÓN DE POLITICAS DE INVENTARIO
                </h3>
            </div>
        </div>
        
    </main>




    @push('js')




     <!-- Initialize Flatpickr -->
     <script type="module">




        </script>
    @endpush
</x-layout>

