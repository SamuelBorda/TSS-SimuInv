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
                    CASO 3 - POLITICAS DE COMPRA PARA VENDEDOR DE REVISTAS
                    </span></h3>
                </div>
                <div class="botonayuda">
                    <a href=" {{ route('ejercicio1.ayuda') }} " class="btn btn-gradient-outline">¿Necesitas ayuda?</a>
                </div>
            </div>
            <div class="enunciadoEjercicio marginIzqDer">
                <form class="formularioEjercicio1">
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="tituloNumDias" class="text-white fw-bold">Cantidad de compra inicial</label>
                            <input type="text" class="form-control" id="numdias" placeholder="Ingrese numero de compra inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloInvIni" class="text-white fw-bold">Costo de compra inicial</label>
                            <input type="text" class="form-control" id="inventarioIni" placeholder="Ingrese el costo de compra inicial">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoMante" class="text-white fw-bold">Costo de venta al público</label>
                            <input type="text" class="form-control" id="costoMantenimiento" placeholder="Ingrese costo de mantenimiento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoFalta" class="text-white fw-bold">Costo de compra adicional</label>
                            <input type="text" class="form-control" id="costoFaltante" placeholder="Ingrese costo de compra adicional">
                        </div>
                        </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución inicial</label>
                            <input type="text" class="form-control" id="costoOdernar" placeholder="Ingrese costo de devolucion inicial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tituloCostoOrdenar" class="text-white fw-bold">Costo de devolución final</label>
                            <input type="text" class="form-control" id="costoOdernar" placeholder="Ingrese costo de devolucion final">
                        </div>


                        <p class="text-white">
                        <strong class="fw-bold">POLÍTICA  1 : </strong> Compra de revistas con devolucion día decimo
                        </p>


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
