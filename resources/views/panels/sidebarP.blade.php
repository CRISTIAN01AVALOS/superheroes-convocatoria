<aside style="background-color: #ab0033 !important;" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start " id="sidenav-main">
    <hr class="horizontal dark mt-5">
  <div class="w-auto mt-5" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('panelAdmin') }}"> 
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 text-white">Inicio</span>
          </a>
        </li>
        @can('ver-administrar')
        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 text-white">Panel Admin</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="show">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1 text-white">Registros</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="formulario">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-file-invoice text-white text-sm opacity-10" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1 text-white">Formulario</span>
          </a>
        </li> -->
        @endcan
      </ul>
    </div>
  </aside>