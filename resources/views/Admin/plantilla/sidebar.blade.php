<aside>
    <div id="sidebar"  class="nav-collapse " >
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
        	  <p class="centered"><a href="profile.html"><img src="{{asset('images/logo.png')}}" class="img-circle" width="100"></a></p>

                <h5 class="centered">Biemvenido</h5>
        	  
            <li class="mt">
                <a class="@yield('class-ins','#')" href="{{route('admin.lista_inscripciones')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Inscripciones</span>
                </a>
            </li>            

            <li class="sub-menu">
                <a class="@yield('class-user','#')"href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                </a>
                <ul class="sub">
                    <li class="@yield('class-user-reg','#')"><a  href="{{ route ('usuarios.create')}}">Registrar</a></li>
                    <li class="@yield('class-user-list','#')"><a  href="{{ route ('usuarios.index')}}">Listado de usuarios</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a class="@yield('class-est','#')" href="javascript:;" >
                    <i class="fa fa-graduation-cap"></i>
                    <span>Estudiantes</span>
                </a>
                <ul class="sub">
                    <li class="@yield('class-est-reg','#')" ><a  href="{{route('estudiantes.create')}}">Registrar</a></li>

                    <li class="@yield('class-est-list','#')"><a  href="{{route('estudiantes.index')}}">Listado de estudiantes</a></li>

                    <li class="@yield('class-est-import','#')"><a  href="{{url('admin/estudiante/importform')}}">Importar excel</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="@yield('class-prog','#')" href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Programas</span>
                </a>
                <ul class="sub">
                    <li class="@yield('class-prog-reg','#')" ><a  href="{{route('programas.create')}}">Nuevo</a></li>

                    <li class="@yield('class-prog-list','#')" ><a  href="{{route('programas.index')}}">Listado de programas</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Basic Table</a></li>
                    <li><a  href="responsive_table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Morris</a></li>
                    <li><a  href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="@yield('class-doc','#')"href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Docentes</span>
                </a>
                <ul class="sub">
                    <li class="@yield('class-doc-reg','#')"><a  href="{{ route ('admin.documentos.form')}}">Cargar documetnos</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>