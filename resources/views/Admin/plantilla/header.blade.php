      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation" style="color: white"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>FUNIAJC</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                  <li>
                      <a class="logout" href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Salir
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
            	</ul>
            </div>
        </header>