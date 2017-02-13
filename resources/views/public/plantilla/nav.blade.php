
<div class="row" id="Banner">
    <div class="col-md-12">
        <div style="background-color: #FBDE3F; ">
            <img style="height: 90px; padding-left: 10px; padding-top: 10px;" class="img-responsive" src="{{asset('images/logo2.png')}}">
            </img>
        </div>
    </div>
</div>

<div class="row" id="MenuNav">
    <div class="col-md-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="container navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="{{ url('/') }}">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La institucion<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{{ url('/mision') }}" >Mision</a></li>
                                     <li><a href="{{ url('/vision') }}" >Vision</a></li>
                                     <li><a href="{{ url('/objetivos') }}" >Objetivos</a></li>
                                 </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diplomados<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{{ url('/diplomados/ingenieria') }}" >Ingenieria</a></li>
                                     <li><a href="#" >Ciencias Sociales & Humanas</a></li>
                                     <li><a href="#" >Ciencias Empresariales</a></li>
                                 </ul>                            
                        </li>
                        <li>
                            <a href="">
                                Eventos
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Proyectos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contacto') }}">
                                Contacto
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/login') }}">
                                Inciar Session
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
