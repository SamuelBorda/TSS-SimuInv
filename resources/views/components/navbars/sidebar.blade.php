@props(['activePage'])

<aside class="sidenav navbar navbar-vertical navbar-expand-xs    fixed-start  custom-max-width bg-gray-450" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <span class="ms-2 font-weight-bold bg-gradient-simu ">SIMU INV</span>

        </a>

    </div>
    <br>
    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 d-flex  h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav" style="height: 100%;">

            <li class="nav-item mt-3">

            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'Usuarios' ? 'active bg-gradient-primary' : '' }} "
                href="{{ route('dashboard') }}">
                   <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10 fs-3">home</i>
                    </div>
                    <span class="nav-link-text ms-1">INICIO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == ' activar' ? ' active bg-gradient-primary' : '' }} "
                href="{{ route('ejercicio1') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/Uno.png') }}" alt="Upload File" >
                    </div>
                    <span class="nav-link-text ms-1">CASO 1</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'Grupos' ? ' active bg-gradient-primary' : '' }} "
                href="{{ route('ejercicio2') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/dos.png') }}" alt="Upload File" >
                    </div>
                    <span class="nav-link-text ms-1">CASO 2</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'ImportarDatos' ? ' active bg-gradient-primary' : '' }} "
                  href="{{ route('ejercicio3') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/tres.png') }}" alt="Upload File" >
                    </div>
                    <span class="nav-link-text ms-1">CASO 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == '' ? ' active bg-gradient-primary' : '' }}  "
                href="{{ route('ejercicio4') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/cuatro.png') }}" alt="Upload File" >
                    </div>
                    <span class="nav-link-text ms-1">CASO 4</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == '' ? ' active bg-gradient-primary' : '' }}  "
                href="{{ route('ejercicio5') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/cinco.png') }}" alt="Upload File" >
                    </div>
                    <span class="nav-link-text ms-1">CASO 5</span>
                </a>
            </li>


        </ul>
    </div>

</aside>


