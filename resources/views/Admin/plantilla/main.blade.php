<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield('titulo','Inicio') |Panel de Administracion </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Files_theme/css/bootstrap.css')}}">
    <!--external css-->
    <link rel="stylesheet" href="{{ asset('Files_theme/font-awesome/css/font-awesome.css')}}">
        
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('Files_theme/css/style.css')}}">    

    <link rel="stylesheet" href="{{ asset('Files_theme/css/style-responsive.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >

      <!--header start-->
        @include('admin.plantilla.header')
      <!--header end-->

      <!--sidebar start-->
        @include('admin.plantilla.sidebar')
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>@yield('titulo-ventana','Inicio')</h3>
          	<div class="row mt">
                <div class="col-lg-8">
                    @yield('cuerpo')
                </div>
          	</div>
			
		      </section> <!--wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - Jhoan Gordillo
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('Files_theme/js/jquery.js')}}"></script>

    <script src="{{ asset('Files_theme/js/bootstrap.min.js') }}"></script>

    <script src="{{asset('Files_theme/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

    <script src="{{asset('Files_theme/js/jquery.ui.touch-punch.min.js')}}"></script>

    <script class="include" type="text/javascript" src="{{asset('Files_theme/js/jquery.dcjqaccordion.2.7.js')}}"></script>

    <script src="{{asset('Files_theme/js/jquery.scrollTo.min.js')}}"></script>

    <script src="{{asset('Files_theme/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{asset('Files_theme/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    
  <script>
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
