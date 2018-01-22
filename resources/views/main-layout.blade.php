<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Talent Guru') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-flash.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/bar-ui/css/bar-ui.css')}}" rel="stylesheet">
        <meta name="google-site-verification" content="a5B4llYBASpMS40-ppb8lfjpgq4BB7e6O-xxEGnZlcA" />

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
                            @if ((Auth::guard('web_model')->guest()) && (Auth::guard('web_artist')->guest()) )
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
                            @elseif(Auth::guard('web_model')->check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::guard('web_model')->user()->name }} <span class="caret"></span></a>                                                                
                                <ul class="dropdown-menu" role="menu">                                
                                    <li><a href="{{route('modelprofile.index')}}">Your Profile</a></li>                                    
                                    <li class="divider"></li>                                        
                                    <li><a href="{{route('modelalbums.create')}}">Upload a new gallery</a></li>                                    
                                    <li><a href="{{route('modelalbums.index')}}">View your existing galleries</a></li>                                                                        
                                    <li class="divider"></li>
                                    <li><a href="{{route('modelsettings.edit',Auth::guard('web_model')->user()->id)}}">Edit settings</a></li>                                     
                                    <li class="divider"></li>
                                    <li><a href="{{route('modelbillinginfo.index')}}">Your billing information</a></li>                                     
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
                            @elseif(Auth::guard('web_artist')->check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::guard('web_artist')->user()->name }} <span class="caret"></span></a>                                                                
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
            </nav>           
            <section class="content">               
                @yield('content')
            </section>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="{{ url('/') }}"><img class="img-responsive" src="{{asset('images/footer-logo.png')}}"></a>
                    </div>

                    <div class="col-md-3">
                        <h4>Company Information</h4>
                        <ul class="footer-menu">
                            <!--<li><a href="{{ url('about') }}">About {{ config('app.name', 'Talent Guru') }}</a></li>-->
                            <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Social Media</h4>
                        <ul class="footer-menu">
                            <li><a href="https://www.facebook.com/Talentguruafrica-1780916165535105/" target="new"><i class="fa fa-facebook-square"></i></a> <a href="https://www.instagram.com/talentguruafrica/" target="new"><i class="fa fa-instagram"></i></a></li>
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
        <script type="text/javascript" defer="defer">
            $(document).ready(function () {
            var easingFn = function (t, b, c, d) {
            var ts = (t /= d) * t;
            var tc = ts * t;
            return b + c * (tc * ts + - 5 * ts * ts + 10 * tc + - 10 * ts + 5 * t);
            }
            var numero = Math.sqrt(40000);
            var options = {
            useEasing: true,
                    easingFn: easingFn,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
            };
            var demo = new CountUp('timer', 0, 118 + numero, 0, 2.5, options);
            if (!demo.error) {
            demo.start();
            } else {
            console.error(demo.error);
            }
            }
            );
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
