<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'VoiceCast') }}</title>
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
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                    Home</a>
                            </li>

                            <li>
                                <a href="#tab_default_3" data-toggle="tab">
                                    How this works</a>
                            </li>
                            <li>
                                <a href="#tab_default_4" data-toggle="tab">
                                    FAQ</a>
                            </li>
                            <li>
                                <a href="#tab_default_5" data-toggle="tab">
                                    Contact us</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="container-fluid bg-overlay">
                                    <div class="row text-center">
                                        <h1 class="center cta">Are you the next big Voice Artist?</h1>
                                        <p class="center">Thousands of brands await opportunities <br /> to partner with you and thrill their audiences.</h4>
                                            <br><br>
                                            <a href="{{ url('/artist_register') }}"><button type="button" class="btn btn-warning btn-lg text-uppercase">Upload your demo now</button></a>
                                    </div>
                                </div>                                

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
<!--                                            <h3><span class="highlighted">1</span>Enter details of your submission</h3>
                                            <p>
                                                Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                                in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                            </p>
                                            <p>
                                                <a class="btn btn-success" href="http://j.mp/metronictheme" target="_blank">
                                                    Learn more...
                                                </a>
                                            </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="tab-pane" id="tab_default_3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <br /><br />
                                            <h2>How this works</h2>
                                            <p>
                                                Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                                in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                            </p>
                                            <p>
                                                Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                                in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                            </p>
                                            <p>
                                                Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                                in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                            </p>
                                            <p>
                                                Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                                in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                            </p>
                                            <p>
                                                <a class="btn btn-success" href="http://j.mp/metronictheme" target="_blank">
                                                    Learn more...
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <br /><br />
                                            <h2>Frequently asked questions</h2>

                                            <div class="panel-group" id="faqAccordion">
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: What is Lorem Ipsum?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>

                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five <a href="http://jquery2dotnet.com/" class="label label-success">http://jquery2dotnet.com/</a> centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: Why do we use it?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>

                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: Where does it come from?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>

                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: Where can I get some?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>

                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--/panel-group-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_5">
                                <div class="artist-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="panel panel-success">               
                                                    <div class="panel-body">
                                                        
                                                            <h2>Contact us</h2>
                                                       
                                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('contactus.store') }}">
                                                            {{ csrf_field() }}
                                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                                <label for="name" class="col-md-4 control-label">Full name</label>
                                                                <div class="col-md-6">
                                                                    <input  type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name" required/>
                                                                    @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                                <label for="email" class="col-md-4 control-label">Email</label>
                                                                <div class="col-md-6">
                                                                    <input  type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" required/>
                                                                    @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                                                <label for="message" class="col-md-4 control-label">Message</label>
                                                                <div class="col-md-6">

                                                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required maxlength="255" placeholder="Message">{{ old('message') }}</textarea>
                                                                    @if ($errors->has('message'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('message') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-md-8 col-md-offset-4">
                                                                    <button type="submit" class="btn btn-primary text-uppercase">
                                                                        Send Message
                                                                    </button>                                                        
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
