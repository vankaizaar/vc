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
        <script data-pace-options='{ "ajax": true }' type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> 
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('images/logo.png')}}">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            @guest
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MODELS <span class="caret"></span></a>
                                <ul class="dropdown-menu">                                   
                                    <li><a href="{{ url('/model_register') }}"><i class="glyphicon glyphicon-pencil"></i>  Sign up as a model</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('/model_login') }}"><i class="glyphicon glyphicon-log-in"></i> Log in</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VOICE OVER ARTISTS <span class="caret"></span></a>
                                <ul class="dropdown-menu">                                   
                                    <li><a href="{{ url('/artist_register') }}"><i class="glyphicon glyphicon-pencil"></i>  Sign up as a voice over artist</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('/artist_login') }}"><i class="glyphicon glyphicon-log-in"></i>  Log in</a></li>
                                </ul>
                            </li>
                            @endguest

                            @auth('web_artist')
                            <a href="{{ url('/artist_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your profile</a>
                            @endauth

                            @auth('web_model')
                            <a href="{{ url('/model_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your profile</a>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
            <header>
                <div class="container">
                    <div class="row">                                             
                        <div class="col-md-3 text-right">
                            <!--<a href="#" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                            <a href="#" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>-->
                            <!-- Authentication Links -->
                            @if (Auth::guard('web_model')->guest())
                            <!--Artist Login and registration Links -->
                            <a href="{{ url('/model_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Upload demo</a>
                            <a href="{{ url('/model_login') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>                          
                            @else

                            <ul class="nav navbar-nav navbar-right">                            
                                <li class="dropdown">
                                    <a href="{{route('profile.index')}}" class="dropdown-toggle profile-name" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <span style="color:rgb(40, 116, 200) !important; font-weight:normal;">Logged in as {{ Auth::guard('web_model')->user()->name }}</span> <br /> MENU <span class="glyphicon glyphicon-menu-hamburger"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('modelprofile.index')}}">Your Profile</a></li>                                    
                                        <li class="divider"></li>                                        
                                        <li><a href="{{route('modelalbums.create')}}">Upload Gallery</a></li>                                    
                                        <li><a href="{{route('modelalbums.index')}}">Manage Galleries</a></li>                                                                        
                                        <li class="divider"></li>
                                        <li><a href="{{route('modelsettings.edit',Auth::guard('web_model')->user()->id)}}">Edit settings</a></li>                                     
                                        <li class="divider"></li>
                                        <li><a href="{{route('modelbillinginfo.index')}}">Billing Information</a></li>                                     
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{ url('/model_logout') }}"
                                               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/model_logout') }}" method="POST" style="display: none;">
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
                <!--<div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li>
                                <a href="{{ url('/') }}#tab_default_1"  class="text-uppercase">
                                    Home</a>
                            </li>

                            <li>
                                <a href="{{ url('/') }}#tab_default_4"  class="text-uppercase">
                                    FAQ</a>
                            </li>                            
                            <li>
                                <a href="{{ url('/') }}#tab_default_5"  class="text-uppercase">
                                    Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>-->
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
                        <br />
                    </div>                    
                    <div class="col-md-3">
                        <h4>Company Information</h4>
                        <ul class="footer-menu">                            
                            <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Social Media</h4>
                        <ul class="footer-menu">
                            <li><a href="https://www.facebook.com/Talentguruafrica-1780916165535105/"><i class="fa fa-facebook-square"></i></a> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-instagram"></i></a></li>                           
                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-right"><small>(C) 2017 {{ config('app.name', 'Talent Guru') }} Limited. All rights reserved.&nbsp; </small></p>
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
                    @if (Session::has('status'))
                    swal({title: "Success!",
                            text: "{{Session::get('status')}}",
                            type: "success",
                            timer: 5000,
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
        <script type="text/javascript">
                    $(function () {
                    $("[data-toggle='tooltip']").tooltip();
                    });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110233202-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
            dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-110233202-1');
        </script>

    </body>
</html>