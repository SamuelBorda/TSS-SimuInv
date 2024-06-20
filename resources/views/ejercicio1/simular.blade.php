<x-layout bodyClass="g-sidenav-show  bg-gray-400">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100   bg-gray-450"  style="margin-left: 15.625rem;">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
         
        <br>
        <br>
        <br>
        <div class="py-4  bg-gray-400">
            <div class="panelTitulo">
                <div class="tituloEjercicio">
                    <h3><span class="bg-gradient-titleejercicio">
                        CASO 1 - COMPARACIÓN DE POLITICAS DE INVENTARIO
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href=" {{ route('ejercicio1.ayuda') }} " class="btn btn-gradient-outline">¿Necesitas ayuda?</a>
                </div>             
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <form class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloNumDias">Número de días</label>
                            <input type="text" class="form-control" id="numdias" placeholder="Ingrese número de días">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni">Inventario inicial</label>
                            <input type="text" class="form-control" id="inventarioIni" placeholder="Ingrese inventario inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante">Costo de mantenimiento</label>
                            <input type="text" class="form-control" id="costoMantenimiento" placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta">Costo de faltante</label>
                            <input type="text" class="form-control" id="costoFaltante" placeholder="Ingrese costo de faltante">
                        </div>
                        </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar">Costo de ordenar</label>
                            <input type="text" class="form-control" id="costoOdernar" placeholder="Ingrese costo de ordenar">
                        </div>
                    </div>
                    <div class="botonIniciar">
                        <button type="submit" class="btn btn-gradientIniciar">Iniciar</button>
                    </div>               
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