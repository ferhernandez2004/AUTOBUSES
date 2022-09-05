<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('BUSES.IO') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'inicio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">home</i>
            <p>{{ __('INICIO') }}</p>
        </a>
      </li>
      {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item{{ $activePage == 'registro_motoristas' ? ' active' : '' }}">
        <a class="nav-link"  href="{{ route('motoristas.create') }}">
          <i class="material-icons">person</i>
            <p>{{ __('REGISTRO MOTORISTA') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'unidades' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('unidades.create') }}">
          <i class="material-icons">directions_bus</i>
            <p>{{ __('REGISTRO UNIDAD') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'rotacion' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">cached</i>
          <p>{{ __('ROTACION') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'lista_empleados' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route ('motoristas.index')}}">
          <i class="material-icons">list</i>
            <p>{{ __('LISTA EMPLEADOS') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'lista_unidades' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route ('unidades.index')}}">
          <i class="material-icons">list</i>
          <p>{{ __('LISTA UNIDADES') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'lista_rotacion' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">list</i>
          <p>{{ __('LISTA ROTACIÓN') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
