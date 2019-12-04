 <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="ni ni-tv-2 text-primary"></i>Pagina principal
            </a>
          </li>
          <hr class="my-1">
          <h6 class="navbar-heading text-muted text-center">Gestion de informacion</h6>
          
          <li class="nav-item">
            <a class="nav-link" href="/patients">
              <i class="ni ni-single-02 text-orange"></i> Pacientes
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('specialties')}}">
              <i class="ni ni-briefcase-24 text-yellow"></i> Especialidades
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('doctors')}}">
              <i class="ni ni-circle-08 text-blue"></i> Medicos
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('schedules')}}">
              <i class="ni ni-watch-time text-golden"></i> Horarios
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('shifts')}}">
              <i class="ni ni-calendar-grid-58 text-purple"></i> Turnos
            </a>
          </li>

         <!-- <li class="nav-item">
            <a class="nav-link" href="./examples/profile.html">
              <i class="ni ni-single-02 text-default"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/tables.html">
              <i class="ni ni-bullet-list-67 text-default"></i> Tables
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('csesion').submit();"> 
                <i class="ni ni-button-power text-red"></i> Cerrar Sesion
            </a>
                <form method="POST" action="{{ route('logout') }}" style="display: none;" id="csesion">
                  @csrf
                </form>

          </li>
    
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Informes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-chart-bar-32"></i> Medicos mas activos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-chart-pie-35"></i> Frecuencia de turnos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-satisfied"></i> Pacientes atendidos

          <hr class="my-3">
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-settings-gear-65 text-default"></i> Configuraciones
            </a>
          </li>

            </a>
          </li>
        </ul>