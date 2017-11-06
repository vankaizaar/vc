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
                            <a href="{{ url('/artist_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your profile</a>
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
                               <a href="{{ url('/artist_register') }}">
                                    <div class="container-fluid bg-overlay">
                                        <div class="row text-center">
                                        <!-- <h1 class="center cta">Are you the next big Voice Artist?</h1>
                                            <p class="center">Thousands of brands await opportunities <br /> to partner with you and thrill their audiences.</h4>
                                                <br><br>
                                                <a href="{{ url('/artist_register') }}"><button type="button" class="btn btn-warning btn-lg text-uppercase">Upload your demo now</button></a>
                                                -->
                                        </div>
                                    </div>                                
                               </a>

                            </div>                            
                            <div class="tab-pane" id="tab_default_3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <br /><br />
                                            <h2 class="text-center">How this works</h2>
                                            <p class="lead text-center">
                                                You tell us what you need recorded.
                                                We tell you how much it is going to cost and how long it will take.
                                                You can select the voice actor yourself or let us choose for you.
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
                                                            <a href="#" class="ing">Q: What are the key traits required to be a voice artist in {{ config('app.name', 'Talent Guru') }}?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>
                                                            <p><span>These are the characteristics of the most successful voice artists:</span></p>
                                                            <p><strong>High-quality standards:</strong></p>
                                                            <p><span>voice artists who craft professional deliverables and are detail oriented. Only flawless and properly edited deliverables will be accepted.</span></p>
                                                            <p><strong>Speed response:</strong></p>
                                                            <p><span>{{ config('app.name', 'Talent Guru') }} site is designed so that the fastest voice artists receive project invitations first. They also receive more invitations to projects.</span></p>
                                                            <p><strong>Availability:</strong></p>
                                                            <p><span>Reliable voice artists who are frequently available are prioritised. If a voice artist is not available, they should notify {{ config('app.name', 'Talent Guru') }} in advance.</p>
                                                            <p><strong>Communication:</strong></p>
                                                            <p><span>When something unexpected occurs the best way to proceed is to contact a Manager. Communicating proactively is key to succeeding as a voice artist.</span></p>
                                                            <p><strong>Follow directions:</strong></p>
                                                            <p><span>The ability to follow directions is very important; all successful voice artists are experts in reading and understanding exactly what is needed from them.</span></p>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: {{ config('app.name', 'Talent Guru') }} Quality requirements ?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>
                                                            <p><span>The Quality Control team uses the following premises when reviewing any recording that is submitted to the system:</span></p>
                                                            <p><strong>voice artistject Requirements:</strong></p>
                                                            <ul>
                                                                <li><span>Does the voice match the age, gender, accent, and language selected by the client?</span></li>
                                                            </ul>
                                                            <p><strong>voice artistject Instructions:</strong></p>
                                                            <ul>
                                                                <li><span>Did the voice artist follow the projects instructions provided in the remarks section?</span></li>
                                                                <li><span>Did the voice artist use the reference of the sample or the external material attached by the client? </span></li>
                                                                <li><span>Did the voice artist read the script exactly as provided?</span></li>
                                                                <li><span>If the voice artist submitted multiple takes, are these complete and organized?</span></li>
                                                            </ul>
                                                            <p><strong>Technical Requirements:</strong></p>
                                                            <ul>
                                                                <li><span>There isn't room echo. </span></li>
                                                                <li><span>The voice sounds at a proper distance from the mic.</span></li>
                                                                <li><span>There isn't distortion/clipping.</span></li>
                                                                <li><span>The volume is normalized around -3dB Peak.</span></li>
                                                                <li><span>There are no editing issues (i.e. clicks, pops, audible cuts).</span></li>
                                                                <li><span>There isn't more silence than needed at the start or end (0.5 secs is suggested).</span></li>
                                                                <li><span>The audio doesn't sound heavily processed (i.e. noise reduction plugin, EQ).</span></li>
                                                                <li><span>There isn't heavy compression and/or limiting.</span></li>
                                                                <li><span>The voice sounds as if it was recorded with professional equipment.</span></li>
                                                                <li><span>There aren't breath noises (i.e. loud, undesired and distracting).</span></li>
                                                                <li><span>There aren't mouth clicks/mouth noises (i.e. loud, undesired and distracting).</span></li>
                                                                <li><span>There aren't plosives.</span></li>
                                                                <li><span>There isn't hiss/white noise.</span></li>
                                                                <li><span>There isn't an electrical noise/hum.</span></li>
                                                                <li><span>There aren't background noises (i.e. cars, mouse clicks, fans, pages, people, etc.).</span></li>
                                                                <li><span>There aren't sibilance issues.</span></li>
                                                            </ul>
                                                            <p><strong>Performance Requirements:</strong></p>
                                                            <ul>
                                                                <li>Does the voice doesn’t sound monotone/flat?</li>
                                                                <li><span>Does the voice sound robotic or computer generated?</span></li>
                                                                <li><span>Are there pronunciation issues, mumbled or unclear words?</span></li>
                                                                <li><span>Does the voice sound nasal/raspy?</span></li>
                                                            </ul>
                                                            <p><strong>Other requirements:</strong></p>
                                                            <ul>
                                                                <li>Did the voice artist include any contact details, or content not relevant to the project? If the project is marked with the syncing option:</li>
                                                                <li>Is the deliverable synced as instructed by the client?</li>
                                                                <li>If the audio has background music, is the voice easy to understand?</li>
                                                                <li><span>Does the sample convey a complete idea? I.e. the sentences are complete, and the demo is clear.</span></li>
                                                                <li><span>If the sample has multiple voices, it is clear which is the pro's voice?</span></li>
                                                                <li><span>If the sample has background music, is the voice easy to understand? Is the mix balanced?</span></li>
                                                                <li><span>Is the sample well labeled regarding of category and other relevant attributes? (Gender, age, purpose, language, accent).</span></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: What are samples for?</a>
                                                        </h4>

                                                    </div>
                                                    <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>
                                                            <p><strong>What is a sample?</strong></p>
                                                            <p><span>A sample can be a fraction of a complete project, or the full project, intended to show the style of a voice artist's work. voice artistjects from a voice artist’s personal portfolio can be uploaded as samples too, once they have passed the application process.</span></p>
                                                            <p>The deliverable submitted in the application process will be the first sample in a voice artist’s profile. When a project is completed, {{ config('app.name', 'Talent Guru') }} will ask the client if their deliverable can be used as a sample by the voice artist.</p>
                                                            <p><strong>What are samples for?</strong></p>
                                                            <p>Adding samples in the correct categories is key for voice artists to show their work to clients and attract them. voice artists are free to upload and organize them as they wish. Whenever a client reviews a profile, they will see it in the way the voice artist ordered it.</p>                                                                                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: How to reset your password? </a>
                                                        </h4>

                                                    </div>
                                                    <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>

                                                            <p><span>If you have forgotten your password or wish to change it please follow the steps below.</span></p>
                                                            <p><strong>Forgot your password?</strong></p>
                                                            <ol>
                                                                <li><span>Go to the log in page and click on reset password.</span></li>
                                                                <li><span>Submit your email address associated with your {{ config('app.name', 'Talent Guru') }} account</span></li>
                                                                <li><span>We will send you an email to reset your password and to very the process.</span></li>
                                                            </ol>
                                                            <p><strong>Want to change your password?</strong></p>
                                                            <ol>
                                                                <li><span>Log in to your {{ config('app.name', 'Talent Guru') }} account.</span></li>
                                                                <li><span>On the navigation bar click on </span><em><span>Edit Settings.</span></em></li>
                                                                <li><span>Submit your new password</span>&nbsp;</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default ">
                                                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                                                        <h4 class="panel-title">
                                                            <a href="#" class="ing">Q: In which formats are audio files submitted? </a>
                                                        </h4>

                                                    </div>
                                                    <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <h5><span class="label label-primary">Answer</span></h5>
                                                            <p><span>You can use the audio recording program of your choice, but you must record your voice over in mono, 44.1 kHz, 16 bit, .wav format, with a volume of around -3db peak or it will not be accepted by our website.</span></p>
                                                            <p><span>If the audio format is not correct, you will see a red error message that tells you the file you are attempting to upload is in the incorrect format. Many audio programs default to 32-bit .wav files. If you are having trouble uploading, be sure to double-check the bit rate.</span></p>
                                                            <p><span>Keep in mind that long .wav files can take a while to upload, depending on your Internet connection speed, so be sure to allow yourself plenty of time. Also, be sure the file has finished uploading before clicking the submit button. If you try to click submit before the file has uploaded completely, you will see an error message.</span></p>                                                            
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
                                                                <div class="col-md-8">
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
                                                                <div class="col-md-8">
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
                                                                <div class="col-md-8">

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
