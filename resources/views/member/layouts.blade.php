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

        <script type="text/javascript"src='https://cdnjs.cloudflare.com/ajax/libs/soundmanager2/2.97a.20150601/script/soundmanager2-jsmin.js'></script>
        <!--[if IE]><script src="/js/360-player/script/excanvas.js" type="text/javascript"></script><![endif]-->
        <script src="/js/360-player/script/berniecode-animator.js" type="text/javascript"></script>
        <script src="/js/360-player/script/360player.js" type="text/javascript"></script>
        <script type="text/javascript">
            soundManager.setup({

            });
        </script>
    </head>
    <body>
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
                            @if (Auth::guard('web_member')->guest())

                            <!--Member Login and registration Links -->

                            <li><a href="{{ url('/member_login') }}">Member Login</a></li>
                            <li><a href="{{ url('/member_register') }}">Member Registration</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('web_member')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('memberprofile.index')}}">Your profile</a></li>                                    
                                    <li class="divider"></li>
                                    <li><a href="{{route('job.create')}}">Post job</a></li>
                                    <li><a href="{{route('job.index')}}">View your jobs</a></li>
                                    <li><a href="{{route('applications.submitted')}}">View applications</a></li>                                    
                                    <li class="divider"></li>
                                    <li><a href="{{route('artists.search')}}">Search voiceover artists</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('membersettings.edit',Auth::guard('web_member')->user()->id)}}">Edit settings</a></li> 
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/member_logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/member_logout') }}" method="POST" style="display: none;">
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