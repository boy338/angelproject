<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Angelproject</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
      	  				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
					<a class="navbar-brand"  href="{{ url('/') }}">
			       		<img alt="Brand" src="{{ asset('/images/logo1-4-md.png') }}" >
					</a>
				</div>


				<div class="collapse navbar-collapse" id="app-navbar-collapse">				
				<!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

					<li><a href="{{ url('/') }}">{{ trans('navbar.home') }}</a></li>
					<li><a href="{{ url('/profile') }}">{{ trans('navbar.profile') }}</a></li>
					<li><a href="{{ url('/article') }}">{{ trans('navbar.article') }}</a></li>
					<li><a href="{{ url('/activity') }}">{{ trans('navbar.activity') }}</a></li>
					<li><a href="{{ url('/contact/create') }}">{{ trans('navbar.contact') }}</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('navbar.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('navbar.register') }}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ trans('navbar.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

				</div>
			</div>
		</nav>

		@yield('content')

    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="{{ asset('js/app.js') }}"></script>
		@yield('script')
  </body>
</html>
