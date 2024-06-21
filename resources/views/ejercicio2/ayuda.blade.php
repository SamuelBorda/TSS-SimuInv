<x-layout bodyClass="g-sidenav-show bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 bg-gray-450" style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <br>
        <br>
        <br>
        <div class="container-fluid py-4 bg-gray-400"> <!-- solo para el espacio -->   </div>  

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
        <div class="container-fluid py-4 bg-gray-400 "> 
            <h3 class="texto-simu2 ">¿COMO FUNCIONA LA APLICACION?</h3>
            <p class="p"> 
                    La aplicacion permite ingresar los siguientes datos:
                    <br><br>
                    <strong>TIEMPO HORAS DE SIMULACION</strong><br>
                    Se ingresa el tiempo en horas del funcionamiento del equipo que se desea simular.
                    <br><br>
                    <strong>COSTO POR COMPONENTE</strong><br>
                    Se ingresa el costo de compra del nuevo componente.
                        <br><br>
                    <strong>COSTO POR HORA DESCONEXION</strong><br>
                    Se ingresa el costo por hora cada que se desconecta el equipo.
            </p>
        </div>
        
        </main>
 @push('css')
        <style>
            
            .p{
                 
                margin-left: 10%;
                color: white;
            }
            .texto-simu2{
                margin-left: 10%;
                color:#00F0FF;
            }
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
             .gradient-button:hover{
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




    </script>
@endpush
</x-layout>