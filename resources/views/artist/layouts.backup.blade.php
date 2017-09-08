<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-flash.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    </head>
    <body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}"></a>
                </div>
                <div class="col-md-6">
                    <div class='search-box'>
                        <form class='search-form'>
                            <input class='form-control' placeholder='Search' type='text'>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <!--<a href="#" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                    <a href="#" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>-->
                    <!-- Authentication Links -->
                            @if (Auth::guard('web_artist')->guest())

                            <!--Artist Login and registration Links -->
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Sign up</a>
                            <a href="{{ url('/artist_login') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Login</a>                          
                            @else
                   <ul class="nav navbar-nav navbar-right">                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('web_artist')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('profile.index')}}">Your Profile</a></li>                                    
                                    <li class="divider"></li>
                                    <li><a href="{{route('audio.index')}}">Manage your portfolio</a></li>
                                    <li><a href="{{route('audio.create')}}">Upload Portfolio</a></li>                                    
                                    <li class="divider"></li>                                    
                                    <li><a href="{{route('jobs.search')}}">View jobs</a></li>
                                    <li><a href="{{route('applications.active')}}">View your applications</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('settings.edit',Auth::guard('web_artist')->user()->id)}}">Edit settings</a></li>                                     
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/artist_logout') }}"
                                           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/artist_logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                </div>
            </div>
        </div>
    </header>
        <div id="app">
          <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guard('web_artist')->guest())

                            <!--Artist Login and registration Links -->

                            <li><a href="{{ url('/artist_login') }}">Artist Login</a></li>
                            <li><a href="{{ url('/artist_register') }}">Artist Registration</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('web_artist')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('profile.index')}}">Your Profile</a></li>                                    
                                    <li class="divider"></li>
                                    <li><a href="{{route('audio.index')}}">Manage your portfolio</a></li>
                                    <li><a href="{{route('audio.create')}}">Upload Portfolio</a></li>                                    
                                    <li class="divider"></li>                                    
                                    <li><a href="{{route('jobs.search')}}">View jobs</a></li>
                                    <li><a href="{{route('applications.active')}}">View your applications</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('settings.edit',Auth::guard('web_artist')->user()->id)}}">Edit settings</a></li>                                     
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/artist_logout') }}"
                                           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/artist_logout') }}" method="POST" style="display: none;">
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
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>

        <script type="text/javascript">
            @if (Session::has('success'))
            swal({title: "Success!",
                text: "{{Session::get('success')}}",
                type: "success",
                timer: 3000,
                confirmButtonColor: "#43ABDB"
            }).catch(swal.noop);
            @endif
                    @if (Session::has('error'))
            swal({title: "Error!",
                    text: "{{Session::get('success')}}",
                    type: "error",
                    timer: 3000,
                    confirmButtonColor: "#43ABDB"
            }).catch(swal.noop);
                    @endif
        </script>    
    </body>
</html>