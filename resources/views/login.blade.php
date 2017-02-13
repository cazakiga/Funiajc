<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login - Funiajc</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('Files_theme/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('Files_theme/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{asset('Files_theme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('Files_theme/css/style-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="{{url('/login')}}" method="post">
		        <h2 class="form-login-heading">Iniciar sesion ahora</h2>
		           {{ csrf_field() }}
                <div class="login-wrap">
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                      </div>
                      
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                        <span class="pull-right">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a> 
                        </span>

                        <div class="form-group">                       
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                        </div>
                    </div> 
                </form>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('Files_theme/js/jquery.js')}}"></script>
    <script src="{{asset('Files_theme/js/bootstrap.min.js')}}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('Files_theme/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{asset('Files_theme/img/login-bg.png')}}", {speed: 500});
    </script>


  </body>
</html>
