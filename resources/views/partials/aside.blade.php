<aside id="main-sidebar" class="box">
    <ul class="main-sidebar-options list-unstyled box">
        @role('superadmin')
        <li>
            <a href="{{ route('category.index') }}">Categorías</a>
        </li>
        <li>
            <a href="{{ route('role.index') }}">Roles y Permisos</a>
        </li>
        <li>
            <a href="{{ route('user.index') }}">Usuarios</a>
        </li>
        <li>
            <a href="{{ route('operator.index') }}">Operadores</a>
        </li>
        <li>
            <a href="{{ route('service.index') }}">Servicios</a>
        </li>
        @endrole
        
        @role('operador')
        <li>
            <a href="{{ route('operador') }}">Mi Información</a>
        </li>
        <li>
            <a href="{{ route('listReservations') }}">Mis Reservaciones</a>
        </li>
        <li>
            <a href="{{ route('listServices') }}">Mis Servicios</a>
        </li>
        @endrole

        @role ('cliente')
        <li>
            <a href="{{ route('cliente') }}">Mi Perfil</a>
        </li>
        <li>
            <a href="{{ route('myReservas') }}">Reservas</a>
        </li>
        @endrole
        
        <li>
            <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout').submit()">
            Cerrar Sesión <span class="fa fa-sign-out-alt"></span>
        </a>
        <form id="logout" action="{{ route('logout') }}" method="post" style="display:none;">
            @csrf
        </form>
    </li>
</ul>
</aside>