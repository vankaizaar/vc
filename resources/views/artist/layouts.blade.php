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
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/bar-ui/css/bar-ui.css')}}" rel="stylesheet">

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
        <div id="app">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}"></a>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-3">
                            <!--<a href="#" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                            <a href="#" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>-->
                            <!-- Authentication Links -->
                            @if (Auth::guard('web_artist')->guest())
                            <!--Artist Login and registration Links -->
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                            <a href="{{ url('/artist_login') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>                          
                            @else

                            <ul class="nav navbar-nav navbar-right">                            
                                <li class="dropdown">
                                    <a href="{{route('profile.index')}}" class="dropdown-toggle profile-name" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::guard('web_artist')->user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('profile.index')}}">Your Profile</a></li>                                    
                                        <li class="divider"></li>                                        
                                        <li><a href="{{route('audio.create')}}">Upload voice samples</a></li>                                    
                                        <li><a href="{{route('audio.index')}}">Manage your samples</a></li>                                                                        
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
            <section class="content">  
                <div class="artist-content">
                    @yield('content')
                </div>                
            </section>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="{{ url('/') }}"><img class="img-responsive" src="{{asset('images/footer-logo.png')}}"></a>
                    </div>
                    <!--<div class="col-md-3">
                        <h4>Additional Services</h4>
                        <ul class="footer-menu">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </div>-->
                    <div class="col-md-3">
                        <h4>Company Information</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('about') }}">About Voice Cast</a></li>
                            <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Social Media</h4>
                        <ul class="footer-menu">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-instagram"></i></a></li>                           
                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-right"><small>(C) 2017 Voice Cast Audio Limited. All rights reserved.&nbsp; </small></p>
                    </div>
                </div>
            </div>
        </footer>  

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