<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'VoiceCast') }} - Privacy Policy</title>
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
                            @if (Auth::guard('web_artist')->guest())
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                            <a href="{{ url('/artist_login') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>
                            @else
                            <a href="{{ url('/artist_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                            @endif
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="artist-content">
                                <div class="panel panel-success">               
                                    <div class="panel-body">

                                        <h1>About VoiceCast</h1>

                                        <p>{{ config('app.name', 'Talent Guru') }} is set to be the largest voice over fulfillment service in Africa. With a target of 10,000+ voice actors that speak 50+ languages and dialects, you can hire a professional voice actor faster and more affordably than ever before. </p>
                                        <p>You can get voiceovers for ads, movies, narrations, podcasts, presentations, audio books, audio guides, and video games. </p>
                                        <p>We promise you’ll love your voiceover: you get unlimited revisions and a 100% satisfaction guarantee. Join the thousands of professionals that use {{ config('app.name', 'Talent Guru') }} exclusively for their voice over fulfillment.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <li><a href="{{ url('about') }}">About {{ config('app.name', 'Talent Guru') }}</a></li>
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
                                    <p class="text-right"><small>(C) 2017 {{ config('app.name', 'Talent Guru') }} Limited. All rights reserved.&nbsp; </small></p>
                                </div>
                            </div>
                        </div>
                    </footer>        
                    <script src="{{asset('js/app.js')}}"></script>
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
