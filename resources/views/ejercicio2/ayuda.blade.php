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
                            CASO 2 - COMPARACIÓN DE POLITICAS DE INVENTARIO
                        </span></h3>
                    </div>             
                </div>
                <div class="enunciadoEjercicio marginIzqDer"> 
                    <h3 class="text-Ayuda">¿Como funciona la aplicación?</h3>
                    <p> 
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
            </div>
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