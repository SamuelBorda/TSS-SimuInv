<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg  bg-gray-450">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
        <form>



        </form>


        </div>
    </main>

    </div>



    @push('js')




     <!-- Initialize Flatpickr -->
     <script type="module">

        </script>
    @endpush
</x-layout>
