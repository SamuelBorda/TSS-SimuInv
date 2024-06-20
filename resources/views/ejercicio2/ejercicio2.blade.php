<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid py-4 bg-gray-400"> <!-- solo para el espacio --> <br>   </div>  

        <div class="container-fluid py-4 bg-dark-400 text-white">
            <h1 class="text-start ps-5">
                <span class="bg-gradient-simu px-4 py-2">
                    CASO 2 - MANTENIMIENTO DE EQUIPOS
                </span>
                <button type="button" class="gradient-button ms-3">¿Necesitas ayuda?</button>
            </h1>
        </div>  

        <div class="container-fluid py-4 bg-gray-400 text-white d-flex justify-content-center align-items-center" style="min-height: 500px;">
            <div class="text-center">
                <p>
                    <strong>POLÍTICA 1:</strong> Reemplazar los componentes solamente cuando se descomponen
                    <br> <br> 
                    <strong>POLÍTICA 2:</strong> Reemplezar los cuatro componentes cuando falle cualquiera de ellos
                </p>
            </div>
        </div>
    </main>

    @push('css')
        <style>
             .gradient-button {
                background: transparent; 
                color: white;  
                border: 1px solid #FFD700;  
                border-radius: 30px;  
                padding: 10px 15px; 
                font-size: 16px;  
                cursor: pointer;  
                transition: background 0.3s ease, color 0.3s ease;  
                margin-left: 15px;  
            }

            .gradient-button:hover {
                background: linear-gradient(to right, #FF4500, #FFD700);  
                color: white;  
            }
            
            .container-fluid {
                width: 100%;
                padding: 0 15px;
                margin-right: auto;
                margin-left: auto;
            }
            
            @media (max-width: 768px) {
                .gradient-button {
                    font-size: 14px;  
                    padding: 8px 16px;  
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
