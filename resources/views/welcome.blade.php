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
                        <div class="col-md-3 text-center">
                            <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}"></a>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-3 text-right">
                            @if (Auth::guard('web_artist')->guest())
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Upload demo</a>
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
                                <a href="#tab_default_1" data-toggle="tab" class="text-uppercase">
                                    Home</a>
                            </li>

                            <li>
                                <a href="#tab_default_4" data-toggle="tab" class="text-uppercase">
                                    FAQ</a>
                            </li>                            
                            <li>
                                <a href="#tab_default_5" data-toggle="tab" class="text-uppercase">
                                    Contact us</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <section>
                                    <div class="my-slider">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/artist_register') }}">
                                                    <div class="main-slider" style="background:url('images/cta2.jpg');background-size: cover; background-position:center center;">
                                                        <div class="cta">
                                                            <img src="images/cta-main.png" alt="Call for voice over artists" class="img-responsive" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>                                                                                       
                                        </ul>
                                    </div>
                                </section>

                                <div class="container">
                                    <section class="spaced2">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">   

                                                <h3 class="text-center no-top">What is {{ config('app.name', 'TalentGuru') }}?</h3>
                                                <p class="lead2 text-justify">
                                                    {{ config('app.name', 'TalentGuru') }} is Africa’s largest talent marketplace, an online platform where talented African artists can make money. {{ config('app.name', 'Talent Guru') }} will only feature professionals and experts in their respective fields. Our rigorous selective process is guaranteed to only keep on board the best of the best.
                                                </p>   

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-offset-2 col-md-8">
                                                <div align="center" class="embed-responsive embed-responsive-16by9">
                                                    <video controls class="embed-responsive-item" poster="video/video-banner.png">
                                                        <source src="video/video.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <section class="spaced2 graded3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <h3 class="text-center whiten no-top">What service categories will be available on {{ config('app.name', 'Talent Guru') }}?</h3>
                                            </div>
                                        </div>
                                        <section class="spaced2">
                                            <div class="row">                                                
                                                <div class="col-xs-3 col-md-offset-1 col-md-2"><img src="images/categories/design.png" alt="Design" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/motion-graphics.png" alt="Motion Graphics" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/script-writing.png" alt="Script Writing" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/coding-tech.png" alt="Coding & Tech" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/modelling.png" alt="Modelling" class="img-responsive center-block cats" /></div>                                                

                                                <div class="col-xs-3 col-md-offset-1 col-md-2"><img src="images/categories/voice-over.png" alt="Voice Over" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/make-up.png" alt="Makeup" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/photography.png" alt="Photography" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/strategy.png" alt="Strategy" class="img-responsive center-block cats" /></div>
                                                <div class="col-xs-3 col-md-2"><img src="images/categories/media-buy.png" alt="Media Buy" class="img-responsive center-block cats" /></div>                                                
                                            </div>
                                        </section>                                        
                                    </div>
                                </section>
                                <div class="container">
                                    <section class="spaced2">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-offset-2 col-md-4">
                                                <section class="bordered-right hidden-xs" style="border-right:1px solid grey;padding:0px 2em">
                                                    <h3 class="text-right hidden-xs no-top">Signing Up</h3>
                                                    <p class="lead3 text-right hidden-xs">
                                                        Signing up for {{ config('app.name', 'TalentGuru') }} is free for artists. At the moment we are signing up voice over artists subsequently the platform will be open for other artists in different categories to sign up. 
                                                    </p> 
                                                    <a href="{{ url('/artist_register') }}" style="text-decoration: none;" class="hidden-xs">
                                                        <button class="btn btn-primary text-uppercase pull-right">
                                                            Sign up now
                                                        </button>      
                                                    </a>                                                                                                       
                                                </section>
                                                <h3 class="text-left visible-xs no-top">Signing Up</h3>
                                                <p class="lead3 text-left visible-xs">
                                                    Signing up for {{ config('app.name', 'TalentGuru') }} is free for artists. At the moment we are signing up voice over artists subsequently the platform will be open for other artists in different categories to sign up. 
                                                </p> 
                                                <a href="{{ url('/artist_register') }}" style="text-decoration: none;" class="visible-xs">
                                                    <button class="btn btn-primary text-uppercase pull-left">
                                                        Sign up now
                                                    </button>      
                                                </a>
                                            </div>

                                            <div class="col-xs-12 col-md-4">
                                                <h3 class="text-left no-top">Not A Voice Over Artist?</h3>
                                                <p class="lead3 text-left">
                                                    Don't worry, pre-register today and we will inform you when your talent category is ready.
                                                    <br /><br /> <br />
                                                </p> 
                                                <a href="{{ url('/subscribers/create') }}" style="text-decoration: none;">
                                                    <button class="btn btn-primary text-uppercase pull-left">
                                                        Pre-Register
                                                    </button>      
                                                </a>
                                            </div>

                                        </div>
                                    </section>
                                </div>   
                                <section class="spaced2 graded3">
                                    <div class="container">
                                        <div class="row">                                            
                                            <div class="col-md-8 col-md-offset-2 text-center whiten">                                                
                                                <h3 class="no-top text-capitalize">We currently have</h3>
                                                <p class="lead" id="timer" style="font-size: 64px;font-weight: bolder;"></p> 
                                                <p style="font-family: Open-sans;text-transform: uppercase;font-weight: bolder;font-size: 1.2em;">Registered Voice Over Artists</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>                            
                            <div class="tab-pane" id="tab_default_4">
                                <section class="spaced2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <h3 class="text-center" style="margin-top:0px;">Voice Over Artists FAQs</h3>
                                                <div class="panel-group" id="faqAccordion">
                                                    <div class="panel panel-default ">
                                                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                                                            <h5 class="panel-title">
                                                                <a href="#" class="ing">Q: What are the key traits required to be a voice artist in {{ config('app.name', 'Talent Guru') }}?</a>
                                                            </h5>

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
                                                            <h5 class="panel-title">
                                                                <a href="#" class="ing">Q: {{ config('app.name', 'Talent Guru') }} Quality requirements ?</a>
                                                            </h5>

                                                        </div>
                                                        <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <h5><span class="label label-primary">Answer</span></h5>
                                                                <p><span>The Quality Control team uses the following premises when reviewing any recording that is submitted to the system:</span></p>
                                                                <p><strong>Project Requirements:</strong></p>
                                                                <ul>
                                                                    <li><span>Does the voice match the age, gender, accent, and language selected by the client?</span></li>
                                                                </ul>
                                                                <p><strong>Project Instructions:</strong></p>
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
                                                            <h5 class="panel-title">
                                                                <a href="#" class="ing">Q: What are samples for?</a>
                                                            </h5>

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
                                                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                                                            <h5 class="panel-title">
                                                                <a href="#" class="ing">Q: In which formats are audio files submitted? </a>
                                                            </h5>

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
                                </section>
                            </div>
                            <div class="tab-pane" id="tab_default_5">
                                <section class="spaced2">
                                    <div class="artist-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <h3 class="text-center" style="margin-top:0px;">Contact us</h3>
                                                    <div class="panel panel-success">               
                                                        <div class="panel-body">



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
                                </section>
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
        <script type="text/javascript">
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
            var demo = new CountUp('timer', 0, {{$artists}} + numero, 0, 2.5, options);
            if (!demo.error) {
            demo.start();
            } else {
            console.error(demo.error);
            }
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
